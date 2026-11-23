<?php

namespace App\History;

final class PlasticBoatsAppendixC
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
            ['page' => 144, 'title' => 'Comparison of Operations Necessary to Build a 57 Foot Plastic Boat by 3 Methods'],
            ['page' => 145, 'title' => 'Comparison of Operations Necessary to Build a 57 Foot Plastic Boat by 3 Methods ... continued'],
            ['page' => 146, 'title' => 'Comparison of Operations Necessary to Build a 57 Foot Plastic Boat by 3 Methods ... end'],
            ['page' => 147, 'title' => 'Female Mold & Hull Layup Method #1'],
            ['page' => 148, 'title' => 'Female Mold & Hull Layup Method #2'],
            ['page' => 149, 'title' => 'Male Mold, Plastic Survaced Hull Complete at Inversion Method #3'],
        ];
    }
}
