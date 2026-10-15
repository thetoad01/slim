# Article blocks

Papers, clippings, and transcripts are **content arrays**. HTML for those arrays lives in one place: `<x-article-blocks>`.

Change how a heading, figure, or list looks in `resources/views/components/article-blocks.blade.php` (and `article-figure.blade.php`). Do not copy markup into a new page view.

## How a page is wired

1. A PHP class (or clipping record) returns a list of blocks in print order.
2. The controller passes that list to the view as `$blocks` (clippings use `$clipping['blocks']`).
3. The Blade view owns only the chrome: hero, byline, contents list, contact. The body is:

```blade
<x-article-blocks :blocks="$blocks" />
```

Examples: `src/History/DefoeStory.php`, `src/History/YachtsAutoBarons.php`, `src/History/WartimeHistoryPartI.php`, `src/Shipbuild/Clippings.php`.

Swanson is still a list of paragraph strings plus one figure in the view. New papers should use blocks instead.

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
    'link' => true,          // optional; the picture opens that file in a new tab
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
    'ordered' => true,       // optional; renders an ordered list
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

### Table

Use this when the source is a table in the prose. A figure that is a data sheet stays a figure.

```php
[
    'type' => 'table',
    'headers' => ['Property', '1044 Laminate', 'Mil-P-17549'],
    'rows' => [
        ['Flexural Strength, PSI', '26,300', '20,000'],
    ],
],
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

## Adding a future page

1. Put the transcription in a PHP class as `blocks()` (or a `blocks` key on the record).
2. Add a Blade view that extends `layouts.app`, with hero/meta as needed.
3. Render the body with `<x-article-blocks :blocks="$blocks" />`.
4. Do not add a new `if ($block['type'] === …)` in the page view. If a paper needs a new shape, add that type to the component first, then use it in the array.

Catalog fields (title, slug, hull, lede, byline) stay on the article class or `Project`. They are not blocks.
