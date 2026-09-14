<?php

namespace App\Shipbuild;

final class FamilyPapers
{
    /** @return list<Project> */
    public static function all(): array
    {
        return [
            InvestigationWarEffort::paper(),
        ];
    }

    public static function findBySlug(string $slug): ?Project
    {
        foreach (self::all() as $paper) {
            if ($paper->slug === $slug) {
                return $paper;
            }
        }

        return null;
    }
}
