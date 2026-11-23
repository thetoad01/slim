<?php

namespace App\Shipbuild;

use App\Markdown\Converter;

final class Clippings
{
    /**
     * Cards for the news-clippings index. The key in pages() is the URL slug.
     *
     * @return list<array{hullNo: string, tag: string, title: string, summary: string, slug: string, linkLabel: string}>
     */
    public static function all(): array
    {
        $cards = [];

        foreach (self::pages() as $slug => $clipping) {
            $cards[] = [
                'hullNo' => $clipping['hullNo'],
                'tag' => $clipping['tag'],
                'title' => $clipping['title'],
                'summary' => $clipping['summary'],
                'slug' => $slug,
                'linkLabel' => 'Read the clipping',
            ];
        }

        return $cards;
    }

    /**
     * Index page: the room hero and the clipping cards.
     *
     * @return array{hero: array<string, string>, meta: list<array{label: string, text: string}>, clippings: list<array<string, string>>}
     */
    public static function index(): array
    {
        $room = Archive::findRoomBySlug('clippings');

        return [
            'hero' => [
                'hull' => $room->hullNo,
                'tag' => $room->tag,
                'mark' => 'Archive',
                'title' => $room->title,
                'lede' => $room->summary,
                'primaryHref' => '#press',
                'primaryLabel' => 'The clippings',
                'backHref' => '/shipbuild#rooms',
                'backLabel' => 'Back to the archive',
            ],
            'meta' => [
                ['label' => 'Hold', 'text' => 'Outside press. Newspapers about the company and its ships.'],
                ['label' => 'In the stack', 'text' => 'Each clipping is its own page. More will be posted as they come in.'],
            ],
            'clippings' => self::all(),
        ];
    }

    /**
     * One clipping page. The body is the markdown file named on the row.
     *
     * @return array{hero: array<string, string>, meta: list<array{label: string, text: string}>, html: string}|null
     */
    public static function page(string $slug): ?array
    {
        $clipping = self::pages()[$slug] ?? null;

        if ($clipping === null) {
            return null;
        }

        return [
            'hero' => [
                'hull' => $clipping['hullNo'],
                'tag' => 'Press',
                'mark' => 'Archive',
                'title' => $clipping['title'],
                'lede' => $clipping['summary'],
                'primaryHref' => '#paper',
                'primaryLabel' => 'The clipping',
                'backHref' => '/shipbuild/clippings#press',
                'backLabel' => 'Back to News clippings',
            ],
            'meta' => [
                ['label' => 'By', 'text' => $clipping['byline']],
                ['label' => 'From', 'text' => $clipping['presented']],
            ],
            'html' => Converter::fileToHtml($clipping['markdown']),
        ];
    }

    /** Live /shipbuild/inthenews/{slug} aliases. */
    public static function slugFromLegacy(string $legacySlug): ?string
    {
        $map = [
            '1917-torpedo-chasers' => 'torpedo-chasers',
            'lakefaring-history' => 'lakefaring-history',
            'savitar-comes-home' => 'savitar-comes-home',
        ];

        return $map[$legacySlug] ?? null;
    }

    /**
     * @return array<string, array{hullNo: string, tag: string, title: string, summary: string, byline: string, presented: string, markdown: string}>
     */
    private static function pages(): array
    {
        return [
            'torpedo-chasers' => [
                'hullNo' => '02.2.1',
                'tag' => '1917',
                'title' => 'Five Torpedo Chasers for Government',
                'summary' => 'De Foe Boat & Motor Co. loads five 40-foot Navy chasers onto flats for the Atlantic coast. Contract price $60,000.',
                'byline' => 'Unknown newspaper.',
                'presented' => 'Clipping, 1917. Transcript from the scan.',
                'markdown' => 'content/clippings/torpedo-chasers.md',
            ],
            'lakefaring-history' => [
                'hullNo' => '02.2.2',
                'tag' => '1999',
                'title' => 'Our Lakefaring History',
                'summary' => 'Essexville lectures on river tugs, warships built in Bay City, and a bid to bring USS Charles F. Adams (DDG-2) home as a museum.',
                'byline' => 'Darlene B. Damp.',
                'presented' => 'The Saginaw News, January 16, 1999.',
                'markdown' => 'content/clippings/lakefaring-history.md',
            ],
            'savitar-comes-home' => [
                'hullNo' => '02.2.3',
                'tag' => '2006',
                'title' => '‘Savitar’ Comes Home',
                'summary' => 'Phil Berg and Leila Hyams roll a 52-foot land yacht onto the Defoe yard in 1955, named for the 118-foot yacht the company built them in 1947.',
                'byline' => 'Tim Younkman.',
                'presented' => 'The Bay City Times, Wednesday, March 1, 2006.',
                'markdown' => 'content/clippings/savitar-comes-home.md',
            ],
        ];
    }
}
