<?php

namespace App;

use App\History\Articles;
use App\History\WartimeHistory;
use App\Shipbuild\Archive;
use App\Shipbuild\Clippings;
use App\Shipbuild\FamilyPapers;
use App\Shipbuild\InvestigationWarEffort;
use App\Shipbuild\Miscellaneous;
use App\Shipbuild\Project;

final class Sitemap
{
    public const ORIGIN = 'https://defoenet.com';

    /**
     * Canonical public pages. Old paths that 301 are not included.
     *
     * @return list<string>
     */
    public static function urls(): array
    {
        $paths = [
            '/',
            self::path(Articles::project()),
        ];

        foreach (Articles::all() as $article) {
            $paths[] = self::path($article);
        }

        foreach (WartimeHistory::parts() as $part) {
            $paths[] = '/history/wartime-history/' . $part['slug'];
        }

        $paths[] = self::path(Archive::project());

        foreach (Archive::rooms() as $room) {
            $paths[] = self::path($room);
        }

        foreach (Clippings::all() as $clipping) {
            $paths[] = '/shipbuild/clippings/' . $clipping['slug'];
        }

        foreach (FamilyPapers::all() as $paper) {
            $paths[] = self::path($paper);
        }

        foreach (InvestigationWarEffort::sections() as $section) {
            $paths[] = InvestigationWarEffort::sectionPath($section['pages']);
        }

        foreach (Miscellaneous::all() as $item) {
            $paths[] = self::path($item);
        }

        $urls = [];

        foreach ($paths as $path) {
            if ($path === null || isset($urls[$path])) {
                continue;
            }

            $urls[$path] = self::ORIGIN . $path;
        }

        return array_values($urls);
    }

    public static function xml(): string
    {
        $lines = [
            '<?xml version="1.0" encoding="UTF-8"?>',
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
        ];

        foreach (self::urls() as $url) {
            $lines[] = '  <url>';
            $lines[] = '    <loc>' . htmlspecialchars($url, ENT_XML1) . '</loc>';
            $lines[] = '  </url>';
        }

        $lines[] = '</urlset>';
        $lines[] = '';

        return implode("\n", $lines);
    }

    private static function path(Project $project): ?string
    {
        return $project->path();
    }
}
