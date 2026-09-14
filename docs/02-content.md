# Site content

The public site is the Defoe Shipbuilding record. It is not a software portfolio.

How to run the app is in [01-using-slim.md](01-using-slim.md). Public URLs, live and planned, are in [03-page-tree.md](03-page-tree.md).

## What’s next

Paths: [03-page-tree.md](03-page-tree.md).

**Continue first**
- Wartime History (`01.4`) — Part V scan gap (see STOP below); exhibits listed, not posted

**Rooms that exist, still empty or incomplete**
- Photographs (`02.1`) — stub
- *The Rollover* (`02.3`) — stub; no issues posted
- Wartime History (`01.4`) — Part V scan gap (see STOP below); exhibits listed, not posted

**New pages**
- `01.5` Research, Development, and Construction of 57 Foot Plastic Boats
- `02.5.2` SS Ernest R. Breech naming (Miscellaneous)

Organize by **what we have**, not by topic. Topics (rollover, yachts, a named hull) can be pages later that pull from these holdings. Do not invent rooms for subjects we do not yet hold as a stack of paper or pictures.

## Holdings

| Holding | What it is | Goes |
|---------|------------|------|
| History | Written accounts of the yard | **History** |
| Photographs | Stills of the yard, launches, hulls, crews, the river | **Archive** |
| News clippings | Newspapers, trade press, launch-day coverage | **Archive** |
| Company magazine (The Rollover) | The yard’s own periodical | **Archive** |
| Family papers | Personal and family record tied to the yard | **Archive**, Family room |
| Awards | Army-Navy **E** awards and similar citations | **Archive**, Family room (until there are enough for their own room) |
| Miscellaneous | Items that do not fit the stacks above | **Archive**, Misc room |
| Related links | Other yards, archives, and sites worth keeping in view | **Archive**, last room |

Family papers include Harry J. Defoe’s congressional testimony, photographs of family on the yachts or ships, and related personal documents. Those are not History articles and not the general photo gallery.

## Sections

| Place | Path | Job |
|--------|------|-----|
| **The yard** | `/#yard` | Orientation: Bay City, Saginaw River, short company copy, 1905–1976 timeline, doors to History and Archive |
| **History** | `/history` | Prose: The Defoe story, History by F. A. Swanson, later articles |
| **Archive** | `/shipbuild` | The hold: photographs, clippings, company magazine, family papers, awards, misc, then related links |
| **Write** | `/#contact` | Photograph identifications, vessel questions, family notes |

The timeline on The yard is dates only. Full prose goes to History. Originals go to Archive.

Nav and back links use **The yard**.

## Archive rooms (intended)

The `/shipbuild` rooms match the holdings below. Topics (yachts, the rollover method as a subject, Perth, plastic boats, and so on) can be pages later that pull from these rooms. **Related links** is the last archive room.

| Hull | Room | Holds |
|------|------|--------|
| 02.1 | Photographs | Yard, ways, crews, launches, hulls. Work pictures. |
| 02.2 | News clippings | Outside press about the company and its ships. |
| 02.3 | Company magazine | Issues of the house organ (*The Rollover*). Post the issues here, not as History articles and not mixed with clippings. |
| 02.4 | Family | Testimony (including Harry Defoe before Congress), family on the yachts and ships, E awards, other family papers. |
| 02.5 | Miscellaneous | Originals that do not fit the stacks above, until a pile is large enough to split out. Hull 02.5.1 is the 1969 HMAS Perth commendation pamphlet. |
| 02.6 | Related links | Other yards, other archives, other people still keeping Great Lakes shipbuilding in view. Pointers, not our paper. |

If photographs of family on the boats are numerous enough to confuse the work gallery, keep them in Family, not in Photographs.

If E awards grow into their own stack, insert them before Miscellaneous and shift Misc and Related links down. **Related links stays last.** Do not leave a gap.

## History articles

| Hull | Article |
|------|---------|
| 01.1 | The Defoe story |
| 01.2 | History by F. A. Swanson |
| 01.3 | Yachts of the Auto Barons |
| 01.4 | The Wartime History of the Offices of the Supervisor of Shipbuilding, USN |

Add `01.4` and on for further written histories. Do not put clippings, the company magazine, testimony, or photo galleries here.

---

**STOP. Hull 01.4 Part V is not complete.**

The DE building arrangement paragraph in `src/History/WartimeHistoryPartV.php` ends mid-sentence at **“Three or four afloat positions…”**. That ellipsis is a hole in the inherited HTML. **It is not the end of the 1946 report.**

**Go back to the archived scans and restore the missing sentences before treating Part V as done. Do not guess. Do not leave this as the public last word on the DE set-up.**

---

## Hull numbers

The yard has no hull number. Each public section is its own hull. Children use `parent.item`.

| Hull | Section | Path |
|------|---------|------|
| — | The yard | `/#yard` |
| 01 | History | `/history` |
| 02 | Archive | `/shipbuild` |

When you add an article or room, use the next number in that hull. Do not reuse numbers across hulls. Do not leave gaps.

## Where the copy lives

Content is PHP data, not a database.

- **`src/Shipbuild/Project.php`** — one hull, room, or article card.
- **`src/History/Articles.php`** — history landing and article listings.
- **`src/History/DefoeStory.php`** — Hull 01.1. Company brochure posted through the back cover.
- **`src/History/YachtsAutoBarons.php`** — Hull 01.3. Polacsek; Tonnancour vol. 2.
- **`src/History/WartimeHistory.php`** — Hull 01.4. Capt. E. L. Patch, 27 May 1946. Preface and Introduction in `WartimeHistoryPreface.php`. Parts I–IX in `WartimeHistoryPartI.php` through `WartimeHistoryPartIX.php`. Exhibits are listed on the landing and not posted yet.
- **`src/Shipbuild/Archive.php`** — archive landing and rooms.
- **`src/Shipbuild/Clippings.php`** — Hull 02.2. News clippings listing and article pages.
- **`src/Shipbuild/Miscellaneous.php`** — Hull 02.5. Miscellaneous listing.
- **`src/Shipbuild/PerthCommendation.php`** — Hull 02.5.1. 1969 pamphlet. Posted.
- **`src/Shipbuild/FamilyPapers.php`** — Family room listings.
- **`src/Shipbuild/InvestigationWarEffort.php`** — Harry Defoe’s 1943 hearings (02.4.1). Transcript body is in `Testimony606615.php` and `Testimony618628.php`.
- Home copy is in `resources/views/home.blade.php`.
