<?php

namespace App\Markdown;

use League\CommonMark\Extension\Table\Table;
use League\CommonMark\Node\Block\Paragraph;
use League\CommonMark\Node\Node;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\HtmlElement;

final class TwoTableListItemRenderer implements NodeRendererInterface
{
    public function render(Node $node, ChildNodeRendererInterface $childRenderer): ?HtmlElement
    {
        ListItem::assertInstanceOf($node);

        $tables = 0;

        foreach ($node->children() as $child) {
            if ($child instanceof Table) {
                $tables++;
            }
        }

        if ($tables !== 2) {
            return null;
        }

        $intro = '';
        $cards = '';
        $title = null;

        foreach ($node->children() as $child) {
            if ($child instanceof Table) {
                $header = $title === null
                    ? ''
                    : new HtmlElement('div', ['class' => 'card-header fw-semibold'], $childRenderer->renderNodes($title->children()));
                $body = new HtmlElement('div', ['class' => 'card-body'], $childRenderer->renderNodes([$child]));
                $card = new HtmlElement('div', ['class' => 'card h-100'], $header . $body);
                $cards .= new HtmlElement('div', ['class' => 'col-12 col-lg-6'], $card);
                $title = null;
                continue;
            }

            if ($child instanceof Paragraph && $child->next() instanceof Table) {
                $title = $child;
                continue;
            }

            $intro .= $childRenderer->renderNodes([$child]);
        }

        $row = new HtmlElement('div', ['class' => 'row g-3'], $cards);

        return new HtmlElement('li', $node->data->get('attributes'), $intro . $row);
    }
}
