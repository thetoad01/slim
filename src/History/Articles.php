<?php

namespace App\History;

use App\Shipbuild\Project;

final class Articles
{
    public static function project(): Project
    {
        return new Project(
            hullNo: '01',
            tag: 'History',
            title: 'Defoe History',
            summary: 'Written accounts of the yard on the Saginaw River.',
            slug: 'history',
            linkLabel: 'History',
            headline: 'Defoe History',
            lede: 'How the brothers opened the yard, and how a man who walked the ways wrote it down. The written record of Defoe Shipbuilding.',
            client: 'Bay City, Michigan',
        );
    }

    /** @return list<Project> */
    public static function all(): array
    {
        $article = static fn (
            string $hullNo,
            string $tag,
            string $title,
            string $summary,
            ?string $slug = null,
        ): Project => new Project(
            hullNo: $hullNo,
            tag: $tag,
            title: $title,
            summary: $summary,
            slug: $slug,
            linkLabel: $slug === null ? null : 'Read the paper',
            base: 'history',
        );

        return [
            DefoeStory::article(),
            $article('01.2', 'History', 'History by F. A. Swanson', 'A yard man’s account. The cadence of the ways as someone who walked them wrote it down.', 'swanson'),
            $article('01.3', 'History', 'Yachts of the Auto Barons', 'John F. Polacsek on Defoe-built yachts for Olds, Rands, Judson, and Kettering — floating mansions from the diesel years.', 'yachts-auto-barons'),
            WartimeHistory::article(),
        ];
    }

    public static function findArticleBySlug(string $slug): ?Project
    {
        foreach (self::all() as $article) {
            if ($article->slug === $slug) {
                return $article;
            }
        }

        return null;
    }
}
