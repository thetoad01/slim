<?php

namespace App\Markdown;

use League\CommonMark\Extension\Table\Table;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Util\HtmlElement;

final class BootstrapTableRenderer implements NodeRendererInterface
{
    public function render(Node $node, ChildNodeRendererInterface $childRenderer): HtmlElement
    {
        Table::assertInstanceOf($node);

        $attrs = $node->data->get('attributes');
        $separator = $childRenderer->getInnerSeparator();
        $children = $childRenderer->renderNodes($node->children());
        $table = new HtmlElement('table', $attrs, $separator . trim($children) . $separator);

        return new HtmlElement('div', ['class' => 'table-responsive'], $table);
    }
}
