# Images

How to export a photograph and where the file goes. What a room holds is in [02-content.md](02-content.md). Public paths and media folders are in [03-page-tree.md](03-page-tree.md). Figure markup inside a paper is in [article-blocks.md](article-blocks.md).

When a size or the lightbox changes, change this file. When a folder or URL changes, change the page tree.

## Two kinds

| Kind | Where it shows | Files |
|------|----------------|-------|
| Article figure | Inside a history paper, clipping, or pamphlet | One JPEG |
| Gallery photograph | `/shipbuild/photographs` (hull 02.1) | Thumb JPEG and large JPEG, same slug |

Article figures sit in the column (`.article-figure`, max-width 40rem). Gallery photographs are a grid of thumbs; the large file opens in the lightbox.

Family pictures stay in Family. See [02-content.md](02-content.md).

## Files

Publish JPEG only. Leave the print uncropped. Keep the master (TIFF, PSD, or the full scan) outside `public/`. The site serves the JPEGs under `public/media/`.

`public/media/` is not a route. Do not create `public/history/` or `public/shipbuild/`; a folder on a live index path would hide that URL.

Add the folder to the Media table in [03-page-tree.md](03-page-tree.md) in the same change that first uses it.

### Article figure

One file. Longest side **1280 px**, quality **80**. CSS scales it down, including narrow figures and two-up groups.

```
public/media/history/the-defoe-story/roll-over.jpg
```

Reference it from a `figure` block. Omit `src` until the file is posted; the placeholder stays.

Set `link` on a chart or drawing whose labels are too small in the column. The picture opens that same JPEG in a new tab.

### Printed page

A magazine advertisement, newspaper advertisement, or brochure page. One JPEG. Longest side **2400 px**, quality **80**, when the scan is that large. Keep the white margin. Do not enlarge a smaller scan; post the file you have and replace it when a finer scan is ready.

```
public/media/archive/miscellaneous/how-defoe-turns-things-upside-down/page.jpg
```

The item page shows the scan, then a transcript of the type. Same pattern as a clipping.

### Gallery photograph

Two files. Same slug in both places.

| File | Longest side | Quality | Path |
|------|----------------|---------|------|
| Thumbnail | **640 px** | **75** | `public/media/archive/photographs/thumbs/{slug}.jpg` |
| Large | **1920 px** | **75** | `public/media/archive/photographs/{slug}.jpg` |

```
public/media/archive/photographs/uss-hoel-ddg-13.jpg
public/media/archive/photographs/thumbs/uss-hoel-ddg-13.jpg
```

Slugs are lowercase, hyphenated, and end in `.jpg`. Name the vessel or the view (`uss-hoel-ddg-13.jpg`). Do not keep scanner names (`IMG_0126.jpg`, `Untitled_20200327_024152.jpg`).

A 640 px thumb is about twice a grid column. A 1920 px large file stays sharp in the lightbox. Do not enlarge a smaller photograph. Use 2400 px, quality 70, only when a hull number or a name on the bow has to stay readable when zoomed.

## Gallery page

Hull 02.1 lists the photographs in `src/Shipbuild/Photographs.php`.

1. List each photograph in a PHP class under `src/Shipbuild/`, the way clippings are listed. Each entry has the slug, the caption, and the alt text. Do not scan the directory.
2. Give the room its own Blade view. The hero and stack follow the clippings room. Thumbs use the article-figure border and a caption under the image.
3. The thumb is a link. `href` is the large file, so the print still opens if JavaScript fails.

```html
<a class="gallery-lightbox" href="/media/archive/photographs/uss-hoel-ddg-13.jpg" data-gallery="photographs" data-title="USS Hoel (DDG-13) at Defoe Shipbuilding">
    <img src="/media/archive/photographs/thumbs/uss-hoel-ddg-13.jpg" alt="USS Hoel (DDG-13) at Defoe Shipbuilding" width="640" height="457" loading="lazy">
</a>
```

The first row loads immediately. Every thumb after that uses `loading="lazy"`.

One page holds the gallery. The HTML list stays small; the browser fetches thumbs as someone scrolls, and the large file loads when a thumb is opened. If the stack gets unwieldy, add ordinary page links (`?page=2`). Each page stays a real URL.

`/shipbuild/gallery` already redirects to `/shipbuild/photographs`.

## Lightbox

Use GLightbox. Vendor it the same way Bootstrap is vendored: `public/css/glightbox.min.css` and `public/js/glightbox.min.js`. Load those from the photographs view. This app has no JavaScript build step.

```javascript
GLightbox({
    selector: '.gallery-lightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true
});
```

`data-title` is the caption. `data-gallery="photographs"` keeps the set together so swipe and loop move through the room.
