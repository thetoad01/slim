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

    /**
     * One row per history article. The key is the URL slug.
     * Hull, tag, title, and lede come from the article. This row adds the hero mark and the copper link.
     *
     * @return array{view: string, hero: array{hull: string, tag: string, mark: string, title: string, lede: string, primaryHref: string, primaryLabel: string}, data: array<string, mixed>}|null
     */
    public static function page(string $slug): ?array
    {
        $article = self::findArticleBySlug($slug);
        $page = self::pages()[$slug] ?? null;

        if ($article === null || $page === null) {
            return null;
        }

        return [
            'view' => $page['view'],
            'hero' => [
                'hull' => $article->hullNo,
                'tag' => $article->tag,
                'mark' => $page['mark'],
                'title' => $article->title,
                'lede' => $article->lede ?? $article->summary,
                'primaryHref' => $page['primaryHref'],
                'primaryLabel' => $page['primaryLabel'],
            ],
            'data' => ($page['data'])(),
        ];
    }

    /**
     * @return array<string, array{view: string, mark: string, primaryHref: string, primaryLabel: string, data: callable(): array<string, mixed>}>
     */
    private static function pages(): array
    {
        return [
            'the-defoe-story' => [
                'view' => 'history.the-defoe-story',
                'mark' => 'Brochure',
                'primaryHref' => '#cover',
                'primaryLabel' => 'The brochure',
                'data' => fn (): array => [
                    'meta' => [
                        ['label' => 'By', 'text' => DefoeStory::byline()],
                        ['label' => 'From', 'text' => DefoeStory::presented()],
                    ],
                    'cover' => DefoeStory::cover(),
                    'chapters' => DefoeStory::chapters(),
                    'blocks' => DefoeStory::blocks(),
                ],
            ],
            'swanson' => [
                'view' => 'history.swanson',
                'mark' => 'May 21, 1964',
                'primaryHref' => '#paper',
                'primaryLabel' => 'The paper',
                'data' => fn (): array => [
                    'html' => Swanson::html(),
                ],
            ],
            'yachts-auto-barons' => [
                'view' => 'history.yachts-auto-barons',
                'mark' => 'Tonnancour',
                'primaryHref' => '#paper',
                'primaryLabel' => 'The paper',
                'data' => fn (): array => [
                    'html' => YachtsAutoBarons::html(),
                ],
            ],
            'wartime-history' => [
                'view' => 'history.wartime-history',
                'mark' => '27 May 1946',
                'primaryHref' => '#contents',
                'primaryLabel' => 'Contents',
                'data' => fn (): array => [
                    'html' => WartimeHistory::html(),
                ],
            ],
        ];
    }
}
