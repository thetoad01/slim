<?php

namespace App\History;

final class PlasticBoatsAppendixB
{
    /**
     * One list of links. The page does not load the scans.
     *
     * @return list<array{type: string, items: list<array{href: string, text: string, pages: string}>}>
     */
    public static function blocks(): array
    {
        $items = [];

        foreach (self::plates() as $plate) {
            $page = $plate['page'];
            $items[] = [
                'href' => '/media/history/plastic-boats/appendix-page-' . $page . '.jpg',
                'text' => $plate['title'],
                'pages' => (string) $page,
            ];
        }

        return [
            [
                'type' => 'links',
                'items' => $items,
            ],
        ];
    }

    /**
     * Titles as posted on the old appendix page. A few keep the spellings on that page.
     *
     * @return list<array{page: int, title: string}>
     */
    private static function plates(): array
    {
        return [
            ['page' => 102, 'title' => 'Test Data 3" x 16" panels Uniformly Distributed Load'],
            ['page' => 103, 'title' => '5" x 20" panels  1 1/2" 8 Ply Series Average of 4 Samples'],
            ['page' => 104, 'title' => '5" x 20" panels  1 3/4" 8 Ply Series Average of 8 Samples'],
            ['page' => 105, 'title' => '5" x 20" panels  2" 8 Ply Series Average of 4 Samples'],
            ['page' => 106, 'title' => '1 1/2" 10 Ply Series Average of 5 Samples'],
            ['page' => 107, 'title' => '1 3/4" 10 Ply Series Average of 5 Samples'],
            ['page' => 108, 'title' => '2" 10 Ply Series Average of 5 Samples'],
            ['page' => 109, 'title' => '1 1/2" 12 Ply Series Average of 4 Samples'],
            ['page' => 110, 'title' => '1 3/4" 12 Ply Series Average of 4 Samples'],
            ['page' => 111, 'title' => '2" 12 Ply Series Average of 4 Samples'],
            ['page' => 112, 'title' => 'Comparison of Average Proportionality Lines Showing Effect on Panel Stiffness of Increasing Core Thickness'],
            ['page' => 113, 'title' => 'Comparison of 5"x 20" Panels'],
            ['page' => 114, 'title' => '5" x 20" Panels, Uniform Load'],
            ['page' => 115, 'title' => 'Load-Deflection Curves at Center Guage'],
            ['page' => 116, 'title' => 'Test Data - 9x60" Panels 6/8/53'],
            ['page' => 117, 'title' => 'Comparison of 9"x60" Panels 1 3/4 Core with Z Bar Longt Stfnr'],
            ['page' => 118, 'title' => 'Comparison of 9"x60" Panels 1 3/4 Core with Z Bar Longt Stfnr  15-June-53'],
            ['page' => 119, 'title' => 'Comparison of 9"x60" Panels Concentrated Loan, Ram Area 3.968in²'],
            ['page' => 120, 'title' => '9"x60" Panels, Various Cure Systems Concentrated Load, Ram Area 3.98in²'],
            ['page' => 121, 'title' => 'Compareison of 9"x60" Panels Bonding Ply Owens Corning Mat'],
            ['page' => 122, 'title' => 'Average of 15 9"x60" Panels 1 3/4 Core Fl. Bar Stvnr.'],
            ['page' => 123, 'title' => 'Average of 15 9"x60" Panels 1 3/4 Core Z Bar Stfnr.'],
            ['page' => 124, 'title' => 'Test Data 9x60" Panels'],
            ['page' => 125, 'title' => 'Comparison of 9"x60" Panels with 3 & 4 Step Layups'],
            ['page' => 126, 'title' => 'Comparison of 9"x60" Beams Containing Various Amounts of Flexible Resin'],
            ['page' => 127, 'title' => '9"x60" Panels, Ferro Mat'],
            ['page' => 128, 'title' => 'Comparison of 9"x60" Panels Using Various Bonding Systems'],
            ['page' => 129, 'title' => 'Comparison of 9"x60" Panels Using Various Constructions'],
            ['page' => 130, 'title' => 'Comparison of 9"x60" Panels Ram Area 1.767in²'],
            ['page' => 131, 'title' => 'Avg of 15 Panels 12-11-53 J.M.A.'],
            ['page' => 132, 'title' => 'Comparison of 9"x60" Panel with Various Bonding Systems Some Using Flexiable Resins'],
            ['page' => 133, 'title' => 'Test Data 9"x60" Panels'],
            ['page' => 134, 'title' => 'Test Data 9"x60" Panels'],
            ['page' => 135, 'title' => 'Comparison of 9"x60" Panels with Various Bonding Systems 12-29-53'],
            ['page' => 136, 'title' => 'Comparison of 9"x60" Panels Various Honeycomb Arrangements 1-18-54'],
            ['page' => 137, 'title' => 'Comparison of 9"x60" Panels Using Hess Goldsmith Woven Roving & Various Combinations of Reisns 1-18-54'],
            ['page' => 138, 'title' => 'Comparison of 9"x60" Panels Using Bigelow-Sanford "Fabmat" in Bonding Layer'],
            ['page' => 139, 'title' => 'Average of 5 7x4-1044 Shingled Panels with Fl Bar Longt 4-8-54'],
            ['page' => 140, 'title' => 'Comparison of 9"x60" Panels 2 Panels Made 12-8-52 & Tested to Show Effect of Aging on Completeness of Cure'],
            ['page' => 141, 'title' => 'Comparison of 9"x60" Panels Concentrated Loan ram Area 1.767 in² 27-Oct-54'],
            ['page' => 142, 'title' => 'Comparison of 9"x60" Panels 2 Quality Assurance Panels Compared with Typical Earlier Panels 5-15-56'],
        ];
    }
}
