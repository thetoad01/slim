<?php

namespace App\History;

use App\Markdown\Converter;
use App\Shipbuild\Project;

final class WartimeHistory
{
    public static function article(): Project
    {
        return new Project(
            hullNo: '01.4',
            tag: 'History',
            title: 'The Wartime History of the Offices of the Supervisor of Shipbuilding, USN',
            summary: 'Capt. E. L. Patch’s 1946 report on SuShips Bay City and Detroit. Defoe is one contractor among the other lakes yards in Part I.',
            slug: 'wartime-history',
            linkLabel: 'Open the report',
            base: 'history',
            lede: 'A Bureau of Ships wartime history of the Supervisor of Shipbuilding offices at Bay City and Detroit. Defoe appears in Part I as one contractor among the other lakes yards those offices supervised.',
        );
    }

    public static function html(): string
    {
        return Converter::fileToHtml('content/history/wartime-history.md', '/history');
    }

    /**
     * One row per public part. The array key is the URL slug.
     * `markdown` is a file under content/. `blocks` is a class with blocks().
     *
     * @return array<string, array{kicker: string, heroTitle: string, lede: string, markdown?: string, blocks?: class-string}>
     */
    public static function parts(): array
    {
        return [
            'preface' => [
                'kicker' => 'Opener',
                'heroTitle' => 'Preface and Introduction',
                'lede' => 'Printed pages I–IV.',
                'markdown' => 'content/history/wartime-history/preface.md',
            ],
            'part-i' => [
                'kicker' => 'Part I',
                'heroTitle' => 'Part I',
                'lede' => 'Chronological Status of Contractors\' Workload, and Periods of Time Involved',
                'markdown' => 'content/history/wartime-history/part-i.md',
            ],
            'part-ii' => [
                'kicker' => 'Part II',
                'heroTitle' => 'Part II',
                'lede' => 'Chronological Summary of the Organization and Development of the Offices of the Supervisor of Shipbuilding, Bay City and Detroit',
                'markdown' => 'content/history/wartime-history/part-ii.md',
            ],
            'part-iii' => [
                'kicker' => 'Part III',
                'heroTitle' => 'Part III',
                'lede' => 'Comments on Organization and Administration',
                'blocks' => WartimeHistoryPartIII::class,
            ],
            'part-iv' => [
                'kicker' => 'Part IV',
                'heroTitle' => 'Part IV',
                'lede' => 'Inspection',
                'blocks' => WartimeHistoryPartIV::class,
            ],
            'part-v' => [
                'kicker' => 'Part V',
                'heroTitle' => 'Part V',
                'lede' => 'Facilities',
                'blocks' => WartimeHistoryPartV::class,
            ],
            'part-vi' => [
                'kicker' => 'Part VI',
                'heroTitle' => 'Part VI',
                'lede' => 'Production Control and Expediting',
                'blocks' => WartimeHistoryPartVI::class,
            ],
            'part-vii' => [
                'kicker' => 'Part VII',
                'heroTitle' => 'Part VII',
                'lede' => 'Contracts and Costs',
                'blocks' => WartimeHistoryPartVII::class,
            ],
            'part-viii' => [
                'kicker' => 'Part VIII',
                'heroTitle' => 'Part VIII',
                'lede' => 'Miscellaneous',
                'blocks' => WartimeHistoryPartVIII::class,
            ],
            'part-ix' => [
                'kicker' => 'Part IX',
                'heroTitle' => 'Part IX',
                'lede' => 'Conclusion',
                'blocks' => WartimeHistoryPartIX::class,
            ],
        ];
    }

    /**
     * @return array{kicker: string, heroTitle: string, lede: string, markdown?: string, blocks?: class-string}|null
     */
    public static function find(string $slug): ?array
    {
        return self::parts()[$slug] ?? null;
    }

    /**
     * Same shape as Articles::page() hero. Hull and tag come from the report; the rest from the part row.
     *
     * @param array{kicker: string, heroTitle: string, lede: string} $part
     * @return array{hull: string, tag: string, mark: string, title: string, lede: string, primaryHref: string, primaryLabel: string, backHref: string, backLabel: string}
     */
    public static function hero(Project $article, array $part): array
    {
        return [
            'hull' => $article->hullNo,
            'tag' => $article->tag,
            'mark' => $part['kicker'],
            'title' => $part['heroTitle'],
            'lede' => $part['lede'],
            'primaryHref' => '#paper',
            'primaryLabel' => 'This part',
            'backHref' => $article->path() . '#contents',
            'backLabel' => 'Back to the report',
        ];
    }

    /**
     * Body for a row from parts(). Markdown becomes HTML; a blocks class stays a block list.
     *
     * @param array{markdown?: string, blocks?: class-string} $part
     * @return array{html: string}|array{blocks: list<array<string, mixed>>}
     */
    public static function content(array $part): array
    {
        if (isset($part['markdown'])) {
            return ['html' => Converter::fileToHtml($part['markdown'])];
        }

        $class = $part['blocks'];

        return ['blocks' => $class::blocks()];
    }

    /**
     * @return array{href: string, label: string}
     */
    public static function continueAfter(string $slug): array
    {
        $slugs = array_keys(self::parts());
        $index = array_search($slug, $slugs, true);
        $next = $index === false ? null : ($slugs[$index + 1] ?? null);

        if ($next === null) {
            return [
                'href' => '/history/wartime-history#contents',
                'label' => 'Back to the report',
            ];
        }

        return [
            'href' => '/history/wartime-history/' . $next,
            'label' => 'Continue to ' . self::parts()[$next]['heroTitle'],
        ];
    }
}
