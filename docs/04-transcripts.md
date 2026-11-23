# Transcripts and pictures

A Markdown file is a portable transcript of one archival document. The TIFF is the document. The JPEG is a picture taken from it. The website only displays the transcript.

CommonMark ([spec.commonmark.org](https://spec.commonmark.org/)) and GitHub Flavored Markdown ([github.github.com/gfm](https://github.github.com/gfm/)) are the whole syntax. Neither spec gives an image, a heading, or a paragraph a `class`, an `id`, or a size. Do not add those. Do not put HTML in the file.

`src/Markdown/Converter.php` is the only place that turns the transcript into this site: `img-fluid` on pictures, Bootstrap on tables, heading ids, and `.md` links rewritten to public URLs.

## Files

One document, one transcript.

```text
content/history/{slug}.md
content/history/{document}/{part}.md
content/clippings/{slug}.md

public/media/history/{slug}/{name}.jpg
public/media/archive/clippings/{slug}-{name}.jpg
```

`{slug}` is the page name (`savitar-comes-home`, `part-i`). `{name}` says what the picture shows (`leila-hyams`, `aerial-from-water`).

The TIFF stays in the archive. It does not go in `content/` and it does not go in `public/`.

A report with parts is a folder of transcripts, one file per part: `preface.md`, `part-i.md`, `part-ii.md`.

## The transcript

Read the TIFF and correct the OCR. Type what is printed. Do not correct the historical wording.

```markdown
# ‘Savitar’ Comes Home

*Stars of Hollywood rolled their ‘land yacht’ into Bay City in 1955*

**By Tim Younkman** — *The Bay City Times*, Wednesday, March 1, 2006

It looked like a cross between a gigantic Greyhound bus and the Vista Cruiser railroad passenger car.
```

- The printed title is `#`. The next heading level is `##`, then `###`.
- The author is bold. The deck, the newspaper, or the occasion is italic.
- A numbered paragraph is a real list: `1.`, `2.`, `3.`. Do not type the number again inside the item.
- A bullet in the document is `-`. A letter such as `(a)` stays in the text.
- A table in the document is a GitHub table, not a list.
- A footnote asterisk is written `\*` so it does not become a bullet.
- A quotation is a blockquote (`>`).
- A link to another transcript is a relative file name, `part-ii.md`. No site URL.

The hero, the continue button, the contents catalog, and the contact band are the website. They are not part of the document, so they do not go in the file.

## Pictures

Put the picture where the document puts it. The words in brackets are the caption printed with it.

```markdown
![Leila Hyams, a star of the 1920s and ’30s. The Bay City Times, 2006.](/media/history/savitar-comes-home/leila-hyams.jpg)
```

That line is the whole instruction. No class, no width, no HTML.

Export the JPEG from the TIFF.

- A picture that fills the column can be wide. `img-fluid` shrinks it to the column.
- A picture that should sit narrower than the column, such as a portrait, must be exported at the width it should appear. A 480-pixel file displays at 480 pixels. A 960-pixel file displays at 960 pixels. The browser does not treat extra pixels as sharpness.
- Keep the TIFF at full size. The JPEG is only the copy the page shows.

The path is root-relative, `/media/...`, with no domain. The same path is the file under `public/`.
