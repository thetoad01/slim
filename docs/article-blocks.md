# Article blocks

Papers, clippings, and transcripts are **content arrays**. HTML for those arrays lives in one place: `<x-article-blocks>`.

Change how a heading, figure, or list looks in `resources/views/components/article-blocks.blade.php` (and `article-figure.blade.php`). Do not copy markup into a new page view.

## How a page is wired

1. A PHP class (or clipping record) returns a list of blocks in print order, or a markdown file is converted to HTML.
2. History articles are a row in `Articles::pages()`, keyed by the URL slug. `HistoryController::show()` looks that row up and passes `$hero` plus the row’s `data`. It does not branch on the slug. A wartime part is a row in `WartimeHistory::parts()`.
3. The history view starts with the shared hero, then the body:

```blade
<x-hero-history :hero="$hero" />

<x-article-blocks :blocks="$blocks" />
```

`{!! $html !!}` replaces `<x-article-blocks>` when the row’s data is markdown. Hull, tag, title, and lede come from the article. The row adds `mark`, `primaryHref`, and `primaryLabel`. The ghost link is “Back to History” unless the hero array sets `backHref` and `backLabel`.

A news clipping is a row in `Clippings::pages()`. `ClippingsController::index()` and `show()` look that up. The view is `<x-hero-archive :hero="$hero" />`, then `{!! $html !!}` from `content/clippings/{slug}.md`.

Block examples: `src/History/DefoeStory.php`, `src/History/WartimeHistoryPartIII.php`.

Swanson, Yachts of the Auto Barons, and the Wartime History preface and Parts I–II are markdown under `content/history/`. A new paper can be markdown or blocks. Do not copy the hero markup into the view.

## Authoring a block

Each item is an array with a `type`. Unknown types (including `p`) render as a paragraph from `text`.

### Paragraph

```php
['type' => 'p', 'text' => 'The yard opened in 1905.'],
```

### Heading

```php
[
    'type' => 'heading',
    'text' => 'The Past',
    'id' => 'the-past',      // optional anchor
    'pages' => '2',          // optional; prints as “pp. 2”
    'level' => 2,            // optional; 3 renders <h3>
],
```

### Figure

Put `src` and `caption` on the block. Omit `src` (or leave it empty) to show the placeholder until the scan is posted.

```php
[
    'type' => 'figure',
    'src' => '/media/history/the-defoe-story/roll-over.jpg',
    'caption' => 'Roll-over method of construction.',
    'placeholder' => 'Extract from the roll-over spread.',
    'id' => 'roll-over',     // optional
    'class' => 'narrow',     // optional extra class on <figure>
],
```

### Figure group

Two photographs per row from the Bootstrap `md` breakpoint; one column on smaller screens. Each item uses the same fields as `figure`.

```php
[
    'type' => 'figures',
    'class' => '',           // optional class on the wrapper
    'items' => [
        ['src' => '/media/.../a.jpg', 'caption' => 'A.', 'id' => 'a'],
        ['src' => '/media/.../b.jpg', 'caption' => 'B.'],
    ],
],
```

### List

Prefer this when the list is one unit in the source.

```php
[
    'type' => 'list',
    'class' => 'columns-2',  // optional; Bootstrap row-cols, one column then two from md
    'items' => [
        '58-173\' Submarine Chasers',
        '17-307\' Destroyer Escort Vessels',
    ],
],
```

Hearings may instead emit consecutive `li` blocks; the component wraps them in one `<ul>`:

```php
['type' => 'li', 'text' => 'First item'],
['type' => 'li', 'text' => 'Second item'],
```

### Note or quote

Both use the hearing-note style.

```php
['type' => 'note', 'text' => '* Name changed later to Defoe Shipbuilding Company.'],
['type' => 'quote', 'text' => '“I don’t own a boat, but I’ve researched the history…”'],
```

### Signatories

```php
[
    'type' => 'signatories',
    'items' => [
        ['name' => 'Thomas J. Defoe', 'title' => 'President'],
        ['name' => 'William M. Defoe', 'title' => 'Chairman of the Board'],
    ],
],
```

### Speech (hearings)

```php
[
    'type' => 'speech',
    'speaker' => 'Mr. Defoe',
    'text' => 'We built them bottom-up.',
],
```

## Adding a history article

1. Add the card in `Articles::all()` (a `Project`, usually from the article class).
2. Add a row in `Articles::pages()` with the same slug: `view`, `mark`, `primaryHref`, `primaryLabel`, and a `data` closure for the body.
3. Add a Blade view that extends `layouts.app`, starts with `<x-hero-history :hero="$hero" />`, then `<x-article-blocks>` or `{!! $html !!}`.
4. Add the public path in [03-page-tree.md](03-page-tree.md). `/history/{slug}` is already routed.

A new wartime part is a key in `WartimeHistory::parts()`. The part view and `WartimeHistory::hero()` are already shared.

Do not add a new `if ($block['type'] === …)` in the page view. If a paper needs a new shape, add that type to `<x-article-blocks>` first, then use it in the array.

Catalog fields (title, slug, hull, lede, byline) stay on the article class or `Project`. They are not blocks. The hero mark and the copper link stay on the `pages()` row.
