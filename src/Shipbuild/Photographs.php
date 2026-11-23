<?php

namespace App\Shipbuild;

final class Photographs
{
    /**
     * Work pictures in Hull 02.1. Add the next photograph at the end of this list.
     *
     * @return list<array{slug: string, title: string, alt: string, width: int, height: int}>
     */
    public static function all(): array
    {
        return [
            [
                'slug' => '20010201-knorr-color-001',
                'title' => 'R/V Knorr',
                'alt' => 'R/V Knorr underway.',
                'width' => 640,
                'height' => 371,
            ],
            [
                'slug' => 'uss-lester-de1022',
                'title' => 'USS Lester (DE-1022)',
                'alt' => 'USS Lester, DE-1022, 314 foot destroyer escort. Sister ship of USS Courtney, DE-1021. Delivered 1957.',
                'width' => 640,
                'height' => 435,
            ],
            [
                'slug' => '20210201_0004_APD-136',
                'title' => 'APD-136',
                'alt' => 'APD-136, alongside the tug John W. Weeks. Built by Defoe as the Rudderow-class destroyer escort USS Carpellotti DE-720 and redesignated a high-speed transport in 1945.',
                'width' => 640,
                'height' => 471,
            ],
        ];
    }
}
