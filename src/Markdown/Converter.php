<?php

namespace App\Markdown;

use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\CommonMark\Node\Block\BlockQuote;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Block\ListBlock;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use League\CommonMark\Extension\Table\Table;
use League\CommonMark\Extension\Table\TableSection;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use League\CommonMark\Node\Block\Document;
use League\CommonMark\Node\Inline\Text;

final class Converter
{
    public static function fileToHtml(string $pathFromProjectRoot, string $linkBase = ''): string
    {
        $path = dirname(__DIR__, 2) . '/' . $pathFromProjectRoot;
        $markdown = file_get_contents($path);

        if ($markdown === false) {
            throw new \RuntimeException('Unable to read ' . $path);
        }

        $converter = new GithubFlavoredMarkdownConverter();
        $environment = $converter->getEnvironment();
        $environment->addRenderer(ListItem::class, new TwoTableListItemRenderer(), 10);
        $environment->addRenderer(Table::class, new BootstrapTableRenderer(), 10);
        $environment->addEventListener(
            DocumentParsedEvent::class,
            static function (DocumentParsedEvent $event) use ($linkBase): void {
                foreach ($event->getDocument()->iterator() as $node) {
                    if ($node instanceof Image) {
                        $node->data->set('attributes.class', 'img-fluid');
                    }

                    if ($node instanceof Heading) {
                        $node->data->set('attributes.id', self::headingId($node));
                    }

                    if ($node instanceof Link && $linkBase !== '') {
                        $node->setUrl(self::sitePath($node->getUrl(), $linkBase));
                    }

                    if ($node instanceof BlockQuote) {
                        $node->data->set('attributes.class', 'fst-italic mb-4');
                    }

                    if ($node instanceof Table) {
                        $node->data->set('attributes.class', 'table table-sm table-bordered align-middle mb-0');
                    }

                    if ($node instanceof TableSection && $node->getType() === TableSection::TYPE_HEAD) {
                        $node->data->set('attributes.class', 'table-light');
                    }

                    if ($node instanceof ListBlock && $node->parent() instanceof Document) {
                        $ordered = $node->getListData()->type === ListBlock::TYPE_ORDERED;
                        $node->data->set('attributes.class', $ordered ? 'ps-3 mb-4' : 'mb-4 text-muted');
                    }

                    if ($node instanceof ListItem) {
                        $parent = $node->parent();
                        $ordered = $parent instanceof ListBlock
                            && $parent->getListData()->type === ListBlock::TYPE_ORDERED;
                        $node->data->set('attributes.class', $ordered ? 'mb-3' : 'mb-2');
                    }
                }
            },
        );

        return $converter->convert($markdown)->getContent();
    }

    private static function headingId(Heading $heading): string
    {
        $text = '';

        foreach ($heading->iterator() as $node) {
            if ($node instanceof Text) {
                $text .= $node->getLiteral();
            }
        }

        $slug = strtolower($text);
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug) ?? '';

        return trim($slug, '-');
    }

    private static function sitePath(string $url, string $base): string
    {
        if (preg_match('#^[a-z][a-z0-9+.-]*:#i', $url) === 1 || str_starts_with($url, '/')) {
            return $url;
        }

        $hash = '';
        $path = $url;

        if (str_contains($url, '#')) {
            [$path, $fragment] = explode('#', $url, 2);
            $hash = '#' . $fragment;
        }

        if (! str_ends_with($path, '.md')) {
            return $url;
        }

        $path = substr($path, 0, -3);
        $segments = [];

        foreach (explode('/', trim($base, '/') . '/' . $path) as $segment) {
            if ($segment === '' || $segment === '.') {
                continue;
            }

            if ($segment === '..') {
                array_pop($segments);
                continue;
            }

            $segments[] = $segment;
        }

        return '/' . implode('/', $segments) . $hash;
    }
}
