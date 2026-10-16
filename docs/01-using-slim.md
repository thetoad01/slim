# Using Slim

This site is a small PHP app: Slim 4 for HTTP, Blade for templates, no database. PHP and Composer are the only tools you need.

What the public pages are for — the yard, history articles, archive rooms, and hull numbers — is in [02-content.md](02-content.md). The URL map, including pages not built yet, is in [03-page-tree.md](03-page-tree.md). Apache is in [05-deploy.md](05-deploy.md).

## Serve the site locally

From the project root:

```bash
composer install
php -S localhost:8080 -t public
```

Then open [http://localhost:8080](http://localhost:8080).

`public/` is the document root. `public/index.php` is the front controller. When PHP’s built-in server is used, that file lets existing files under `public/` (CSS, JS) be served as static assets and sends everything else into Slim.

Use another port if 8080 is taken:

```bash
php -S localhost:8000 -t public
```

## Request path

1. Browser hits `public/index.php`.
2. Composer autoload loads `App\` from `src/`.
3. `bootstrap/app.php` builds the Illuminate container, Blade factory, and Slim app, then loads `routes/web.php`.
4. The matched controller renders a Blade view into the PSR-7 response.

## Redirects

Public paths live in [03-page-tree.md](03-page-tree.md). Controllers and GET/POST routes go in `routes/web.php`.

An old URL that should land on a new one is a Slim redirect, not a room:

```php
$app->redirect('/shipbuild/links', '/shipbuild/related-links', 301);
```

Register it **before** a parameterized route that would otherwise match the same path (for example `/shipbuild/{slug}`). Slim’s default status is 302; use 301 when the old path is a permanent public alias.

A controller can also return a `Location` header itself (the contact form uses 303). Prefer `$app->redirect()` when the only job is to send the browser somewhere else.

## Project outline

```
slim/
├── bootstrap/app.php          # Container, Blade, Slim app
├── public/                    # Web root
│   ├── index.php              # Front controller
│   ├── css/                   # Bootstrap + site.css
│   └── js/                    # Bootstrap bundle
├── resources/views/           # Blade templates
│   ├── layouts/app.blade.php  # HTML shell, theme class, assets
│   ├── home.blade.php
│   ├── components/            # menu, contact-form
│   ├── history/               # history landing
│   └── shipbuild/             # archive landing
├── routes/web.php             # Route table
├── src/                       # Application code (namespace App\)
│   ├── View.php               # Blade factory (no full Laravel)
│   ├── Http/
│   │   ├── Controller.php     # render() helper
│   │   └── Controllers/
│   ├── History/               # History article data
│   └── Shipbuild/             # Archive project + rooms
└── storage/framework/views/   # Compiled Blade cache
```

### HTTP layer

- **`src/Http/Controller.php`** — injects the view factory and writes a rendered template to the response body.
- Controllers stay thin: load domain data, pick a template, return HTML.

### Views

- Templates live in `resources/views`. Names use Blade dots: `shipbuild.landing` → `resources/views/shipbuild/landing.blade.php`.
- Components (`<x-menu />`, `<x-contact-form />`) live in `resources/views/components`.
- The archive page sets `theme` to `theme-yard` so the layout can switch look.

## Adding a page

1. Put a class or method under `src/` that returns the data.
2. Add a controller action that calls `$this->render(...)`.
3. Register the route in `routes/web.php`.
4. Add a Blade template under `resources/views`.
5. Bind the controller in `bootstrap/app.php` if it is new.
