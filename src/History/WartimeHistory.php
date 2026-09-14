<?php

namespace App\History;

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

    public static function byline(): string
    {
        return 'Capt. E. L. Patch, USN, Supervisor of Shipbuilding, USN, Bay City, Michigan. 27 May 1946.';
    }

    public static function letters(): string
    {
        return 'BuShips letters EN/A3-2(130), EM28/A2-11 of 11 May 1945, and EN/A3-2(130) of 11 January 1946.';
    }

    public static function about(): string
    {
        return 'The report covers the Offices of the Supervisor of Shipbuilding, USN, at Bay City and Detroit — not Defoe alone. Patch prepared it in Bay City on 27 May 1946, pursuant to those Bureau of Ships letters. In Part I, Defoe Shipbuilding Company is one contractor among Fisher, Chris-Craft, Eddy, and the other lakes yards under those offices.';
    }

    /**
     * @return list<array{slug: string, kicker: string, heroTitle: string, title: string, lede: string, pages: string, summary: string, entries: list<array{label: string, pages: string}>}>
     */
    public static function parts(): array
    {
        return [
            self::part(
                slug: 'preface',
                kicker: 'Opener',
                heroTitle: 'Preface and Introduction',
                title: 'Preface and Introduction',
                pages: 'I–IV',
                span: 'Printed pages I–IV.',
                entries: [
                    ['label' => 'Preface', 'pages' => 'I, II'],
                    ['label' => 'Introduction', 'pages' => 'III, IV'],
                ],
            ),
            self::part(
                slug: 'part-i',
                kicker: 'Part I',
                heroTitle: 'Part I',
                title: 'Chronological Status of Contractors\' Workload, and Periods of Time Involved',
                pages: '1–10',
                span: 'Part I, pp. 1–10.',
                entries: [
                    ['label' => 'Fisher Boat Works', 'pages' => '1, 2'],
                    ['label' => 'Defoe Shipbuilding Company', 'pages' => '2–4, 9 & 10'],
                    ['label' => 'American Cruiser Company', 'pages' => '4'],
                    ['label' => 'Robinson Marine Construction Company', 'pages' => '4–5'],
                    ['label' => 'Dachel-Carter Shipbuilding Company', 'pages' => '5'],
                    ['label' => 'Chris-Craft Corporation', 'pages' => '6–7'],
                    ['label' => 'Gar Wood Industries', 'pages' => '7'],
                    ['label' => 'Victory Shipbuilding Company', 'pages' => '7'],
                    ['label' => 'Foster Boat Company', 'pages' => '8'],
                    ['label' => 'Eddy Shipbuilding Company', 'pages' => '8'],
                    ['label' => 'Hacker Boat Company', 'pages' => '9'],
                ],
            ),
            self::part(
                slug: 'part-ii',
                kicker: 'Part II',
                heroTitle: 'Part II',
                title: 'Chronological Summary of the Organization and Development of the Offices of the Supervisor of Shipbuilding, Bay City and Detroit',
                pages: '11–27',
                span: 'Part II, pp. 11–27.',
                entries: [
                    ['label' => 'First Period — 20 June 1939 to 17 March 1941', 'pages' => '11'],
                    ['label' => 'Bay City Office', 'pages' => '11–14'],
                    ['label' => 'Detroit Office', 'pages' => '14–15'],
                    ['label' => 'Second Period — 17 March 1941 to 21 May 1942', 'pages' => '15'],
                    ['label' => 'Branch Offices', 'pages' => '17'],
                    ['label' => 'Mileage Table of Distances', 'pages' => '19'],
                    ['label' => 'Organization on 21 May 1942', 'pages' => '20'],
                    ['label' => 'Third Period — 21 May to 4 December 1943', 'pages' => '21'],
                    ['label' => 'Detroit Developments', 'pages' => '22–23'],
                    ['label' => 'Bay City Developments', 'pages' => '23'],
                    ['label' => 'Organization on 4 December 1943', 'pages' => '24'],
                    ['label' => 'Fourth Period', 'pages' => '25'],
                    ['label' => 'LCI(L) Program', 'pages' => '25–26'],
                    ['label' => 'PC Program Completion', 'pages' => '26'],
                    ['label' => 'DE & APD Program Completion', 'pages' => '26'],
                    ['label' => 'YP Program', 'pages' => '26–27'],
                    ['label' => 'AM Program', 'pages' => '27'],
                    ['label' => 'Reduction in Force', 'pages' => '27'],
                ],
            ),
            self::part(
                slug: 'part-iii',
                kicker: 'Part III',
                heroTitle: 'Part III',
                title: 'Comments on Organization and Administration',
                pages: '31–39',
                span: 'Part III, pp. 31–39.',
                entries: [
                    ['label' => 'A. Internal Organization and Development During the War', 'pages' => '31'],
                    ['label' => 'B. Relations with Navy Department and Changes During the War', 'pages' => '31'],
                    ['label' => 'Bureau of Ships', 'pages' => '31, 33'],
                    ['label' => 'Bureau of Ordnance', 'pages' => '33'],
                    ['label' => 'Naval Operations', 'pages' => '33'],
                    ['label' => 'Board of Inspection & Survey', 'pages' => '33'],
                    ['label' => 'C. Relations with Other Government Activities', 'pages' => '34'],
                    ['label' => 'Commandant Ninth Naval District', 'pages' => '34'],
                    ['label' => 'Security', 'pages' => '34'],
                    ['label' => 'Operations', 'pages' => '35'],
                    ['label' => 'Supply & Disbursing', 'pages' => '35'],
                    ['label' => '(Industrial Manager) See Part VIII', 'pages' => '62'],
                    ['label' => 'Others in District', 'pages' => '35'],
                    ['label' => 'Commissioning Detail', 'pages' => '36'],
                    ['label' => 'U.S. Coast Guard', 'pages' => '37'],
                    ['label' => 'Others — Non-Navy, Government', 'pages' => '37'],
                    ['label' => 'D. Relations with Non-Governmental Activities', 'pages' => '38'],
                    ['label' => 'American Red Cross', 'pages' => '38'],
                    ['label' => 'Bay City Golf Club', 'pages' => '38'],
                    ['label' => 'Elks’ Club', 'pages' => '38–39'],
                    ['label' => 'Knights of Columbus', 'pages' => '38–39'],
                    ['label' => 'United Service Organization', 'pages' => '39'],
                    ['label' => 'YMCA — Athletic Facilities', 'pages' => '39'],
                ],
            ),
            self::part(
                slug: 'part-iv',
                kicker: 'Part IV',
                heroTitle: 'Part IV',
                title: 'Inspection',
                pages: '40–44',
                span: 'Part IV, pp. 40–44.',
                entries: [
                    ['label' => 'A. Changes in Methods and Standards of Inspection During the War Period', 'pages' => '40'],
                    ['label' => 'Evaluation of Record', 'pages' => '40'],
                    ['label' => 'William M. Keevey', 'pages' => '40'],
                    ['label' => 'PC 451–', 'pages' => '40'],
                    ['label' => 'Other PCs', 'pages' => '41'],
                    ['label' => 'Later Programs', 'pages' => '41'],
                    ['label' => 'Case of Unsatisfactory Construction', 'pages' => '41–42'],
                    ['label' => 'B. Problems of Maintenance of Adequate Inspection Service with Special Reference to Personnel', 'pages' => '42'],
                    ['label' => 'Difficulty in obtaining good inspectors', 'pages' => '42'],
                    ['label' => 'Difficulty in holding good inspectors', 'pages' => '43'],
                    ['label' => 'Necessity for using enlisted men', 'pages' => '43'],
                    ['label' => 'Reclassification downward', 'pages' => '43'],
                    ['label' => 'C. Relations with INN’s in Inspection Matters', 'pages' => '43–44'],
                ],
            ),
            self::part(
                slug: 'part-v',
                kicker: 'Part V',
                heroTitle: 'Part V',
                title: 'Facilities',
                pages: '45–50',
                span: 'Part V, pp. 45–50.',
                entries: [
                    ['label' => 'A. Factual Record of Expansion', 'pages' => '45'],
                    ['label' => 'No Government furnished facilities', 'pages' => '45'],
                    ['label' => 'Defoe expansion — by years', 'pages' => '45–47'],
                    ['label' => 'Defoe special shipbuilding set-ups', 'pages' => '48'],
                    ['label' => 'Upside down construction', 'pages' => '48'],
                    ['label' => 'PC production line', 'pages' => '48'],
                    ['label' => 'DE building arrangement', 'pages' => '48'],
                    ['label' => 'LCI(L) building arrangement', 'pages' => '49'],
                    ['label' => 'YP building arrangement', 'pages' => '49'],
                    ['label' => 'AM building arrangement', 'pages' => '49'],
                    ['label' => 'AM disposition on termination', 'pages' => '50'],
                    ['label' => 'B. Problems of Finance and Facilities Contracts', 'pages' => '50'],
                    ['label' => 'C. Extent and Type of Planning of Facilities Expansion', 'pages' => '50'],
                ],
            ),
            self::part(
                slug: 'part-vi',
                kicker: 'Part VI',
                heroTitle: 'Part VI',
                title: 'Production Control and Expediting',
                pages: '51–58',
                span: 'Part VI, pp. 51–58.',
                entries: [
                    ['label' => 'A. Extent and Effectiveness of Use of Authority to Approve Changes in Design or Other Matters to Speed Production Without Prior Bureau Approval', 'pages' => '51'],
                    ['label' => 'B. Extent to which office became involved in general production problems such as manpower, labor relations or finance — Contributions of office', 'pages' => '51, 52'],
                    ['label' => 'C. Extent to which yards learned to use the office, and extent to which they went straight to the Bureau or other higher authority', 'pages' => '53'],
                    ['label' => 'D. Evaluation of scheduling and material controls set up by Bureau or WPD from point of view of the field — Special emphasis on effect of adoption of CMP as seen in the field', 'pages' => '54–57'],
                    ['label' => 'E. Evaluation of experience in expediting special programs', 'pages' => ''],
                    ['label' => 'DE Program', 'pages' => '57'],
                    ['label' => 'PB Program', 'pages' => '58'],
                    ['label' => 'F. Relations with INM’s in production and procurement matters', 'pages' => '58'],
                ],
            ),
            self::part(
                slug: 'part-vii',
                kicker: 'Part VII',
                heroTitle: 'Part VII',
                title: 'Contracts and Costs',
                pages: '59–61',
                span: 'Part VII, pp. 59–61.',
                entries: [
                    ['label' => 'A. Changes in function of office during the war as a result of efforts to get field to check expenditures to prevent excessive costs; effectiveness of efforts', 'pages' => '59'],
                    ['label' => 'Fixed price contracts — economy', 'pages' => '59'],
                    ['label' => 'Evaluation of loafing', 'pages' => '59'],
                    ['label' => 'Cost Inspection Office 1941–1942', 'pages' => '59–60'],
                    ['label' => 'Contract changes', 'pages' => '60'],
                    ['label' => 'B. Problems arising in connection with contract termination and surplus property disposition', 'pages' => '61'],
                ],
            ),
            self::part(
                slug: 'part-viii',
                kicker: 'Part VIII',
                heroTitle: 'Part VIII',
                title: 'Miscellaneous',
                pages: '62–70',
                span: 'Part VIII, pp. 62–70.',
                entries: [
                    ['label' => 'Industrial Managers Assistance', 'pages' => '62'],
                    ['label' => 'Water Exit Routes to Seaboard', 'pages' => '62–66'],
                    ['label' => 'Navigation in Ice', 'pages' => '66–67'],
                    ['label' => 'D.F.O. Personnel', 'pages' => '67–68'],
                    ['label' => 'Medical Department', 'pages' => '68–69'],
                    ['label' => 'Military Furloughs', 'pages' => '69–70'],
                ],
            ),
            self::part(
                slug: 'part-ix',
                kicker: 'Part IX',
                heroTitle: 'Part IX',
                title: 'Conclusion',
                pages: '71',
                span: 'Part IX, p. 71.',
                entries: [
                    ['label' => 'Conclusion', 'pages' => '71'],
                ],
            ),
        ];
    }

    public static function findPart(string $slug): ?array
    {
        foreach (self::parts() as $part) {
            if ($part['slug'] === $slug) {
                return $part;
            }
        }

        return null;
    }

    public static function partPath(string $slug): string
    {
        return '/history/wartime-history/' . $slug;
    }

    /**
     * @return array{href: string, label: string}
     */
    public static function continueAfter(string $slug): array
    {
        $parts = self::parts();

        foreach ($parts as $index => $part) {
            if ($part['slug'] !== $slug) {
                continue;
            }

            $next = $parts[$index + 1] ?? null;

            if ($next === null) {
                return [
                    'href' => '/history/wartime-history#contents',
                    'label' => 'Back to the report',
                ];
            }

            return [
                'href' => self::partPath($next['slug']),
                'label' => 'Continue to ' . $next['heroTitle'],
            ];
        }

        return [
            'href' => '/history/wartime-history#contents',
            'label' => 'Back to the report',
        ];
    }

    /**
     * @return list<array{type: string, text: string}>
     */
    public static function blocksFor(string $slug): array
    {
        $part = self::findPart($slug);

        if ($part === null) {
            return [];
        }

        return match ($slug) {
            'preface' => WartimeHistoryPreface::blocks(),
            'part-i' => WartimeHistoryPartI::blocks(),
            'part-ii' => WartimeHistoryPartII::blocks(),
            'part-iii' => WartimeHistoryPartIII::blocks(),
            'part-iv' => WartimeHistoryPartIV::blocks(),
            'part-v' => WartimeHistoryPartV::blocks(),
            'part-vi' => WartimeHistoryPartVI::blocks(),
            'part-vii' => WartimeHistoryPartVII::blocks(),
            'part-viii' => WartimeHistoryPartVIII::blocks(),
            'part-ix' => WartimeHistoryPartIX::blocks(),
            default => self::stubBlocks($part),
        };
    }

    /** @return list<string> */
    public static function exhibits(): array
    {
        return [
            'No. 1. Shipbuilders and principal sub-contractors supervised by SupShips, Bay City and SupShips, Detroit.',
            'No. 2. Wartime history of Asst. Supervisor of Shipbuilding, USN, Algonac, Michigan.',
            'No. 3. Graphic presentation of Navy contracts awarded Defoe Shipbuilding Company.',
            'No. 4. Graphic presentation of Navy contracts awarded Chris-Craft Corporation.',
        ];
    }

    public static function exhibitsNote(): string
    {
        return 'The exhibits are listed here as they stand in the 1946 contents. They are not posted yet.';
    }

    /**
     * @param list<array{label: string, pages: string}> $entries
     * @return array{slug: string, kicker: string, heroTitle: string, title: string, lede: string, pages: string, summary: string, entries: list<array{label: string, pages: string}>}
     */
    private static function part(
        string $slug,
        string $kicker,
        string $heroTitle,
        string $title,
        string $pages,
        string $span,
        array $entries,
    ): array {
        $bits = [];

        foreach ($entries as $entry) {
            $bits[] = $entry['pages'] === ''
                ? $entry['label']
                : $entry['label'] . ' (pp. ' . $entry['pages'] . ')';
        }

        return [
            'slug' => $slug,
            'kicker' => $kicker,
            'heroTitle' => $heroTitle,
            'title' => $title,
            'lede' => $heroTitle === $title ? $span : $title,
            'pages' => $pages,
            'summary' => $span . ' ' . implode('; ', $bits) . '.',
            'entries' => $entries,
        ];
    }

    /**
     * @param array{entries: list<array{label: string, pages: string}>} $part
     * @return list<array{type: string, text: string}>
     */
    public static function stubBlocks(array $part): array
    {
        $blocks = [
            [
                'type' => 'note',
                'text' => 'Text not posted yet. Headings below follow the 1946 table of contents.',
            ],
        ];

        foreach ($part['entries'] as $entry) {
            $blocks[] = [
                'type' => 'heading',
                'text' => $entry['label'],
            ];
        }

        return $blocks;
    }
}
