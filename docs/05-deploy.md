# Deploy

How to serve this app with Apache. Local PHP is in [01-using-slim.md](01-using-slim.md).

The document root is still `public/`, the same idea as a Laravel site. This app has no `public/.htaccess`, so the site file has to send unknown paths to `public/index.php`. Leaving a Laravel vhost as-is only changes the folder; `/` may load, and `/history` will 404.

## Requirements

- PHP **8.3** or newer, with the Apache module (`libapache2-mod-php`)
- Composer, on the machine that installs dependencies
- `mod_rewrite` is not required

No database, `.env`, or `php artisan`.

## Site file

Point `DocumentRoot` at this project’s `public/` directory. `FallbackResource` is the front controller: Apache serves a real file under `public/` (CSS, JS, media) and sends every other path to `index.php`.

Replace the Laravel `<VirtualHost>` (adjust the path and `ServerName`):

```apache
<VirtualHost *:80>
    ServerName defoe.example

    DocumentRoot /var/www/slim/public

    <Directory /var/www/slim/public>
        Options -Indexes +FollowSymLinks
        AllowOverride None
        Require all granted

        DirectoryIndex index.php
        FallbackResource /index.php
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/slim-error.log
    CustomLog ${APACHE_LOG_DIR}/slim-access.log combined
</VirtualHost>
```

Drop Laravel-only pieces from the old file: `AllowOverride All` (it only mattered so `public/.htaccess` could rewrite), any `php artisan` or `public/storage` symlink notes, and a `DocumentRoot` that ends in the Laravel project’s `public/`.

Do not set `DocumentRoot` to the project root. That would expose `src/`, `vendor/`, and `storage/`.

Check and reload:

```bash
sudo apache2ctl configtest
sudo systemctl reload apache2
```

## Install

From the project root, as the deploy user:

```bash
composer install --no-dev --optimize-autoloader
mkdir -p storage/framework/views
```

The web server user must be able to write compiled Blade files in `storage/framework/views`. On Debian and Ubuntu that user is `www-data`:

```bash
sudo chown -R www-data:www-data storage/framework/views
```

`bootstrap/app.php` turns error detail on (`addErrorMiddleware(true, true, true)`). The first argument is `displayErrorDetails`. Set it to `false` on a public host so a failure does not print a stack trace.
