<?php

namespace App\Shipbuild;

final class InvestigationWarEffort
{
    public static function paper(): Project
    {
        return new Project(
            hullNo: '02.4.1',
            tag: 'Family',
            title: 'Investigation of the Progress of the War Effort',
            summary: 'Harry J. Defoe before the House Naval Affairs Committee, June 1943. Renegotiation of war contracts. Only his testimony from the bound hearings.',
            slug: 'investigation-war-effort',
            linkLabel: 'Open the hearings',
            base: 'shipbuild/family',
            lede: 'Harry J. Defoe, managing partner, before the House Committee on Naval Affairs. Seventy-Eighth Congress, first session, pursuant to H. Res. 30.',
        );
    }

    public static function witness(): string
    {
        return 'Harry J. Defoe, managing partner, Defoe Shipbuilding Co., Bay City, Mich.';
    }

    public static function hearings(): string
    {
        return 'House Committee on Naval Affairs, Seventy-Eighth Congress, first session. H. Res. 30. Volume 2. June 10–30, 1943. Renegotiation of war contracts.';
    }

    public static function about(): string
    {
        return 'The published hearings are a 1,311-page bound document. This archive includes only the testimony of Harry J. Defoe, managing partner, Defoe Shipbuilding Co., Bay City, Mich.';
    }

    public static function sectionsNote(): string
    {
        return 'Each link opens that section of the transcript. Names and pagination match the published hearings.';
    }

    /** @return list<array{pages: string, label: string, summary: string}> */
    public static function sections(): array
    {
        return [
            [
                'pages' => '606-615',
                'label' => 'Section 1 — Testimony',
                'summary' => 'Printed pages 606–615. Harry J. Defoe, managing partner, Defoe Shipbuilding Co.',
            ],
            [
                'pages' => '618-628',
                'label' => 'Section 2 — Testimony',
                'summary' => 'Printed pages 618–628 (session resumes on p. 617). Harry J. Defoe only; same pages continue with other witnesses in print.',
            ],
        ];
    }

    public static function findSection(string $pages): ?array
    {
        foreach (self::sections() as $section) {
            if ($section['pages'] === $pages) {
                return $section;
            }
        }

        return null;
    }

    public static function sectionPath(string $pages): string
    {
        return '/shipbuild/family/investigation-war-effort/testimony/' . $pages;
    }

    /** @return list<array{type: string, text: string, speaker?: string}> */
    public static function blocksFor(string $pages): array
    {
        return match ($pages) {
            '606-615' => Testimony606615::blocks(),
            '618-628' => Testimony618628::blocks(),
            default => [],
        };
    }

    /** @return list<string> */
    public static function committee(): array
    {
        return [
            'Carl Vinson, Georgia, Chairman',
            'Patrick H. Drewry, Virginia',
            'Leonard W. Schuetz, Illinois',
            'Warren G. Magnuson, Washington',
            'Lyndon B. Johnson, Texas',
            'Michael J. Bradley, Pennsylvania',
            'Beverly M. Vincent, Kentucky',
            'Ed V. Izac, California',
            'Lansdale G. Sasscer, Maryland',
            'James J. Heffernan, New York',
            'L. Mendel Rivers, South Carolina',
            'F. Edward Hébert, Louisiana',
            'John E. Fogarty, Rhode Island',
            'Winder R. Harris, Virginia',
            'Cameron Morrison, North Carolina',
            'Melvin J. Maas, Minnesota',
            'James W. Mott, Oregon',
            'W. Sterling Cole, New York',
            'George J. Bates, Massachusetts',
            'William E. Hess, Ohio',
            'John Z. Anderson, California',
            'James Wolfenden, Pennsylvania',
            'William W. Blackney, Michigan',
            'William H. Wheat, Illinois',
            'Ward Johnson, California',
            'Robert A. Grant, Indiana',
            'Margaret Chase Smith, Maine',
            'Anthony J. Dimond, Alaska',
            'Bolívar Pagán, Puerto Rico',
            'Joseph B. Farrington, Hawaii',
        ];
    }

    /** @return list<string> */
    public static function staff(): array
    {
        return [
            'Robert E. Kline, Jr., General Counsel',
            'Richard H. Wells, Special Counsel',
            'Louise K. Benton, Clerk',
        ];
    }
}
