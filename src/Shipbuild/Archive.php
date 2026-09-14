<?php

namespace App\Shipbuild;

final class Archive
{
    public static function project(): Project
    {
        return new Project(
            hullNo: '02',
            tag: 'Archive',
            title: 'Defoe Shipbuilding',
            summary: 'Photographs, clippings, the company magazine, family papers, and related links from the Bay City yard.',
            slug: 'shipbuild',
            linkLabel: 'The archive',
            headline: 'Defoe Shipbuilding',
            lede: 'Knock-down boats, auto-baron yachts, wartime escorts, and Great Lakes hulls. The yard on the Saginaw River, 1905–1976.',
            client: 'Bay City, Michigan',
        );
    }

    /** @return list<Project> */
    public static function rooms(): array
    {
        $room = static fn (
            string $hullNo,
            string $tag,
            string $title,
            string $summary,
            ?string $slug = null,
        ): Project => new Project(
            hullNo: $hullNo,
            tag: $tag,
            title: $title,
            summary: $summary,
            slug: $slug,
            linkLabel: $slug === null ? null : 'Enter the room',
            base: 'shipbuild',
        );

        return [
            $room('02.1', 'Photographs', 'Photographs', 'Yard, ways, crews, launches, hulls. The work pictures.', 'photographs'),
            $room('02.2', 'Press', 'News clippings', 'Outside press about the company and its ships. Launch days, contracts, the war order book, and the quiet after the gates closed.', 'clippings'),
            $room('02.3', 'Magazine', 'The Rollover', 'Issues of the company magazine. The house organ, not the clippings and not a History article.', 'the-rollover'),
            $room('02.4', 'Family', 'Family papers', 'Harry Defoe’s congressional testimony, family on the yachts and ships, Army-Navy E awards, and other family papers.', 'family'),
            $room('02.5', 'Misc', 'Miscellaneous', 'Originals that do not yet fit the stacks above. The HMAS Perth commendation pamphlet is the first item.', 'miscellaneous'),
            $room('02.6', 'Index', 'Related links', 'Other yards, other archives, other people still keeping Great Lakes shipbuilding in view. Pointers, not our paper.', 'related-links'),
        ];
    }

    public static function findRoomBySlug(string $slug): ?Project
    {
        foreach (self::rooms() as $room) {
            if ($room->slug === $slug) {
                return $room;
            }
        }

        return null;
    }
}
