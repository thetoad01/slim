<?php

namespace App\Shipbuild;

final class Miscellaneous
{
    /** @return list<Project> */
    public static function all(): array
    {
        return [
            PerthCommendation::item(),
            UpsideDownAdvertisement::item(),
            ErnestRBreech::item(),
        ];
    }

    public static function findBySlug(string $slug): ?Project
    {
        foreach (self::all() as $item) {
            if ($item->slug === $slug) {
                return $item;
            }
        }

        return null;
    }
}
