<?php

namespace App\History;

use App\Shipbuild\Project;

final class PlasticBoats
{
    public static function article(): Project
    {
        return new Project(
            hullNo: '01.5',
            tag: 'History',
            title: 'Research, Development, and Construction of 57 Foot Plastic Boats',
            summary: 'James M. Anderson’s report for the Bureau of Ships on 57 Foot plastic boats built at Bay City under Contract NObs-2799. Reviewed by Thomas J. Defoe.',
            slug: 'plastic-boats',
            linkLabel: 'Open the report',
            base: 'history',
            lede: 'James M. Anderson’s report to the Bureau of Ships on the research, design, and construction of 57 Foot reinforced plastic boats at Defoe Shipbuilding Company, Bay City.',
        );
    }

    public static function byline(): string
    {
        return 'James M. Anderson. Reviewed by Thomas J. Defoe.';
    }

    public static function contract(): string
    {
        return 'Contract NObs-2799. Defoe Shipbuilding Company, Bay City, Michigan.';
    }

    public static function about(): string
    {
        return 'Anderson prepared this report for the Bureau of Ships, and Thomas J. Defoe reviewed it. It is the yard’s account of basic research, design, and construction under Contract NObs-2799. Parts I–XII are the prose. Appendices B, C, and D are plates: 41 data sheets and curves, 6 method drawings, and 18 letters and calculation sheets. There is no Appendix A.';
    }

    public static function appendicesNote(): string
    {
        return 'The appendix plates are not posted yet.';
    }

    /**
     * @return list<array{slug: string, kicker: string, heroTitle: string, title: string, lede: string, pages: string, summary: string, entries: list<array{label: string, pages: string}>, posted: bool}>
     */
    public static function parts(): array
    {
        return [
            self::part('part-i', 'Part I', 'Introduction', [
                'History of NObs-2799',
                'Purpose',
                'Scope',
            ], posted: true),
            self::part('part-ii', 'Part II', 'Process Investigations, Chronological Sequence', [
                'The Marco Method',
                'The Open Mold, Hand Layup Process',
                'The Wet Layup',
                'Layup With Preimpregnated Cloths',
                'Layup With Thixotropic Resins',
            ], posted: true),
            self::part('part-iii', 'Part III', 'Tests, Chronological Sequence', [
                '3" x 16" Sandwich Panel Tests (Summer 1952)',
                'Water Transmission Tests (Sept. 1952 - Feb. 1953)',
                '5" x 20" Sandwich Panel Tests (Oct. 1952 - May 1953)',
                'Dow Chemical Co. Tests (Dec. 1952 and Feb. 1953)',
                'University of Michigan Tests',
                'New York Naval Shipyard Tests (November 1952 - April 1954)',
                '9" x 60" Panel Tests (June 1953 - April 1956)',
            ], posted: true),
            self::part('part-iv', 'Part IV', 'Basic Design Considerations', [], posted: true),
            self::part('part-v', 'Part V', 'Local Design Details', [
                'The Hull Shell',
                'The Stem',
                'Deck Construction',
                'The Keel',
                'Internal Structural Components',
                'Bulkheads',
                'Longitudinal Girders',
                'Transverse Bracketing',
                'Walking Flats',
                'Bolting Provisions',
            ], posted: true),
            self::part('part-vi', 'Part VI', 'Tooling Development', [
                'The Male Plug',
                'The Female Mold',
                'Scaffolds and Staging',
                'Reference Location',
                'Molding of Internal Components',
                'Deck Molds',
            ], posted: true),
            self::part('part-vii', 'Part VII', 'Production of MSB-23', [
                'Mold Preparation',
                'The Outer Skin',
                'Core Material and Internal Reinforcements',
                'The Inner Bonding Layer',
                'Internal Structural Components',
                'Bulkheads',
                'Girders',
                'Flats',
                'Deck Beams and Longitudinals',
                'Destruction By Fire',
                'Interim Developments',
            ], posted: true),
            self::part('part-viii', 'Part VIII', 'Production of ExMSB-23 (Second Boat)', [
                'The Male Mold',
                'The Inner Skin',
                'Core Material, Internal Reinforcements, and Outer Bonding Layer',
                'The Outer Skin and Stem Reinforcement',
                'The Keel',
                'Inversion and Mold Removal',
                'Installation of Internal Structural Components',
                'Deck Fabrication',
                'Installations and Outfitting',
                'Launching, Trials, and Delivery',
            ], posted: true),
            self::part('part-ix', 'Part IX', 'Quality Control', [
                'MSB-23',
                'ExMSB-23',
            ], posted: true),
            self::part('part-x', 'Part X', 'Materials', [
                'Preimpregnated Glass Cloths',
                'Low Density Core Materials',
                'Glass Reinforcements',
                'Resins',
                'Fillers',
                'Sealers',
                'Parting Agents',
                'Surfacing Films',
                'Vacuum Bag Material',
            ], posted: true),
            self::part('part-xi', 'Part XI', 'Problems', [], posted: true),
            self::part('part-xii', 'Part XII', 'Conclusions', [], posted: true),
            self::part('appendix-b', 'Appendix B', 'Test Data and Load-Deflection Curves', []),
            self::part('appendix-c', 'Appendix C', '57 Foot Plastic Boat, Comparison of Three Building Methods', []),
            self::part('appendix-d', 'Appendix D', 'Basic Strength Analysis', []),
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
        return '/history/plastic-boats/' . $slug;
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

            for ($next = $index + 1, $count = count($parts); $next < $count; $next++) {
                if ($parts[$next]['posted']) {
                    return [
                        'href' => self::partPath($parts[$next]['slug']),
                        'label' => 'Continue to ' . $parts[$next]['heroTitle'],
                    ];
                }
            }

            return [
                'href' => '/history/plastic-boats#contents',
                'label' => 'Back to the report',
            ];
        }

        return [
            'href' => '/history/plastic-boats#contents',
            'label' => 'Back to the report',
        ];
    }

    /**
     * @return list<array{type: string, text?: string}>
     */
    public static function blocksFor(string $slug): array
    {
        return match ($slug) {
            'part-i' => PlasticBoatsPartI::blocks(),
            'part-ii' => PlasticBoatsPartII::blocks(),
            'part-iii' => PlasticBoatsPartIII::blocks(),
            'part-iv' => PlasticBoatsPartIV::blocks(),
            'part-v' => PlasticBoatsPartV::blocks(),
            'part-vi' => PlasticBoatsPartVI::blocks(),
            'part-vii' => PlasticBoatsPartVII::blocks(),
            'part-viii' => PlasticBoatsPartVIII::blocks(),
            'part-ix' => PlasticBoatsPartIX::blocks(),
            'part-x' => PlasticBoatsPartX::blocks(),
            'part-xi' => PlasticBoatsPartXI::blocks(),
            'part-xii' => PlasticBoatsPartXII::blocks(),
            default => [],
        };
    }

    /**
     * @param list<string> $labels
     * @return array{slug: string, kicker: string, heroTitle: string, title: string, lede: string, pages: string, summary: string, entries: list<array{label: string, pages: string}>, posted: bool}
     */
    private static function part(string $slug, string $kicker, string $title, array $labels, bool $posted = false): array
    {
        $entries = [];

        foreach ($labels as $label) {
            $entries[] = ['label' => $label, 'pages' => ''];
        }

        return [
            'slug' => $slug,
            'kicker' => $kicker,
            'heroTitle' => $kicker,
            'title' => $title,
            'lede' => $title,
            'pages' => '',
            'summary' => $entries === [] ? '' : implode('; ', $labels) . '.',
            'entries' => $entries,
            'posted' => $posted,
        ];
    }
}
