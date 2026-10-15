# Page tree

Public URLs. Add or change a row here in the same change as the route.

- Run the app: [01-using-slim.md](01-using-slim.md)
- What belongs on a page: [02-content.md](02-content.md)

## Home

| Path | Page |
|------|------|
| `/` | Home |
| `/robots.txt` | Crawler rules. Allows all. Points at the sitemap. |
| `/sitemap.xml` | Canonical URLs of the public pages. Old paths that 301 are not listed. |
| `/#yard` | The yard |
| `/#contact` | Write |
| `POST /contact` | Contact submit. Redirects to `/#contact`. Does not send mail yet. |

## History

Hull 01. Indexes stay in the nav; children do not.

| Path | Hull | Page | Notes |
|------|------|------|--------|
| `/history` | 01 | History index | All four articles linked |
| `/history/the-defoe-story` | 01.1 | The Defoe story | Brochure through the back cover |
| `/history/swanson` | 01.2 | History by F. A. Swanson | 1964 SNAME paper |
| `/history/yachts-auto-barons` | 01.3 | Yachts of the Auto Barons | Polacsek; Tonnancour vol. 2 |
| `/history/wartime-history` | 01.4 | Wartime History of the Offices of the Supervisor of Shipbuilding, USN | Patch, 27 May 1946. Exhibits listed, not posted |
| `/history/wartime-history/preface` | 01.4 | Preface and Introduction | pp. I–IV |
| `/history/wartime-history/part-i` | 01.4 | Part I | pp. 1–10 |
| `/history/wartime-history/part-ii` | 01.4 | Part II | pp. 11–27 |
| `/history/wartime-history/part-iii` | 01.4 | Part III | pp. 31–39 |
| `/history/wartime-history/part-iv` | 01.4 | Part IV | pp. 40–44 |
| `/history/wartime-history/part-v` | 01.4 | Part V | pp. 45–50. Scan gap: restore DE paragraph from the 1946 scans. See [02-content.md](02-content.md) |
| `/history/wartime-history/part-vi` | 01.4 | Part VI | pp. 51–58 |
| `/history/wartime-history/part-vii` | 01.4 | Part VII | pp. 59–61 |
| `/history/wartime-history/part-viii` | 01.4 | Part VIII | pp. 62–70 |
| `/history/wartime-history/part-ix` | 01.4 | Part IX | p. 71 |

## Archive

Hull 02. Related links stays last.

| Path | Hull | Page | Notes |
|------|------|------|--------|
| `/shipbuild` | 02 | Archive index | All six rooms linked |
| `/shipbuild/photographs` | 02.1 | Photographs | Stub |
| `/shipbuild/clippings` | 02.2 | News clippings | 02.2.1–02.2.3 linked |
| `/shipbuild/clippings/torpedo-chasers` | 02.2.1 | Five Torpedo Chasers for Government | 1917 |
| `/shipbuild/clippings/lakefaring-history` | 02.2.2 | Our Lakefaring History | *The Saginaw News*, 16 January 1999 |
| `/shipbuild/clippings/savitar-comes-home` | 02.2.3 | ‘Savitar’ Comes Home | *The Bay City Times*, 1 March 2006 |
| `/shipbuild/the-rollover` | 02.3 | *The Rollover* | Stub. No issues posted |
| `/shipbuild/family` | 02.4 | Family papers | 02.4.1 linked |
| `/shipbuild/family/investigation-war-effort` | 02.4.1 | Investigation of the Progress of the War Effort | Harry Defoe, 1943 |
| `/shipbuild/family/investigation-war-effort/testimony/606-615` | 02.4.1 | Testimony, pp. 606–615 | |
| `/shipbuild/family/investigation-war-effort/testimony/618-628` | 02.4.1 | Testimony, pp. 618–628 | |
| `/shipbuild/miscellaneous` | 02.5 | Miscellaneous | 02.5.1 linked |
| `/shipbuild/miscellaneous/perth-commendation` | 02.5.1 | HMAS Perth Commendation | 1969 pamphlet posted |
| `/shipbuild/miscellaneous/how-defoe-turns-things-upside-down` | 02.5.2 | How Defoe Turns Things Upside Down | Magazine advertisement, p. 68. Magazine and date not on the page |
| `/shipbuild/related-links` | 02.6 | Related links | Pointers only |

## Planned

Move a row to History or Archive when it ships. Add `01.5` or a new Archive room in hull order.

| Path | Hull | Page | Notes |
|------|------|------|--------|
| `/history/…` | 01.5 | 57 Foot Plastic Boats | Anderson / Thomas J. Defoe. 301 from `/shipbuild/plastic-boats` |
| `/shipbuild/miscellaneous/…` | 02.5.3 | SS Ernest R. Breech naming | 301 from `/shipbuild/breech-naming` |

## Redirects

Old `/shipbuild` paths. 301 to the row in History or Archive.

| From | To |
|------|----|
| `/shipbuild/defoe-story` | `/history/the-defoe-story` |
| `/shipbuild/TheDefoeStory.htm` | `/history/the-defoe-story` |
| `/shipbuild/defoe-history01.htm` | `/history/swanson` |
| `/shipbuild/swanson-history` | `/history/swanson` |
| `/shipbuild/yachts-auto-barons` | `/history/yachts-auto-barons` |
| `/shipbuild/offices-supervisor/wartime-history` | `/history/wartime-history` |
| `/shipbuild/offices-supervisor/table-of-contents` | `/history/wartime-history#contents` |
| `/shipbuild/offices-supervisor/preface` | `/history/wartime-history/preface` |
| `/shipbuild/offices-supervisor/introduction` | `/history/wartime-history/preface#introduction` |
| `/shipbuild/offices-supervisor/part-1` … `part-9` | `/history/wartime-history/part-i` … `part-ix` |
| `/shipbuild/defoe_menu.html` | `/shipbuild` |
| `/shipbuild/gallery` | `/shipbuild/photographs` |
| `/shipbuild/inthenews` | `/shipbuild/clippings` |
| `/shipbuild/inthenews/1917-torpedo-chasers` | `/shipbuild/clippings/torpedo-chasers` |
| `/shipbuild/inthenews/lakefaring-history` | `/shipbuild/clippings/lakefaring-history` |
| `/shipbuild/inthenews/savitar-comes-home` | `/shipbuild/clippings/savitar-comes-home` |
| `/shipbuild/the-defoe-rollover` | `/shipbuild/the-rollover` |
| `/shipbuild/investigation-war-effort` | `/shipbuild/family/investigation-war-effort` |
| `/shipbuild/investigation-war-effort/testimony/{pages}` | `/shipbuild/family/investigation-war-effort/testimony/{pages}` |
| `/shipbuild/perth-commendation` | `/shipbuild/miscellaneous/perth-commendation` |
| `/shipbuild/links` | `/shipbuild/related-links` |

## Media

Folders under `public/` when a room is fitted out. Do not put a folder on a live index path (`public/history/` would hide `/history`).

| Folder | Hull |
|--------|------|
| `public/media/history/the-defoe-story/` | 01.1 |
| `public/media/history/swanson/` | 01.2 |
| `public/media/history/yachts-auto-barons/` | 01.3 |
| `public/media/archive/clippings/` | 02.2 |
| `public/media/archive/miscellaneous/perth-commendation/` | 02.5.1 |
| `public/media/archive/miscellaneous/how-defoe-turns-things-upside-down/` | 02.5.2 |

Stubs have no media folders yet. Family 02.4.1 is transcript only.
