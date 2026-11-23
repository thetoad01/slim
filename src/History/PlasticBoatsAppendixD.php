<?php

namespace App\History;

final class PlasticBoatsAppendixD
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
            ['page' => 151, 'title' => 'Bureau of Ships Navy Deparment Letter Page 1'],
            ['page' => 152, 'title' => 'Bureau of Ships Navy Deparment Letter Page 2'],
            ['page' => 153, 'title' => 'Bureau of Ships Navy Deparment Letter Page 3'],
            ['page' => 154, 'title' => 'loads and Force During Hoisting Conditions'],
            ['page' => 156, 'title' => 'Computing Sheet Neutral Axis Station 9'],
            ['page' => 157, 'title' => 'Computing Sheet Neutral Axis Station 8 1/2'],
            ['page' => 158, 'title' => 'Computing Sheet Neutral Axis Station 8'],
            ['page' => 159, 'title' => 'Computing Sheet Neutral Axis Station 6'],
            ['page' => 160, 'title' => 'Computing Sheet Neutral Axis Station 4'],
            ['page' => 161, 'title' => 'Computing Sheet Neutral Axis Station 2'],
            ['page' => 162, 'title' => 'Moment of Inertia & Neutral Axis Station #5'],
            ['page' => 163, 'title' => 'Moment of Inertia & N.A. Station #5 Outer Skin'],
            ['page' => 164, 'title' => 'Moment of Inertia & N.A. Station #5 Inner Skin'],
            ['page' => 165, 'title' => 'Moment of Inertia & Neutral Axis Station #5 Internal Stfnrs'],
            ['page' => 166, 'title' => 'Moment of Inertia & Neutral Axis Station #5 Structural Members'],
            ['page' => 168, 'title' => 'Table 1 Weight C.G. as Per Load Curve & Ballast'],
            ['page' => 169, 'title' => 'Table 2 Detail Gravity Load Diagram Fig #3'],
            ['page' => 170, 'title' => 'Table 2 (Cont) Detail Gravity Load Diagram'],
        ];
    }
}
