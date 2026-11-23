<?php

namespace App\History;

use App\Markdown\Converter;

final class YachtsAutoBarons
{
    public static function html(): string
    {
        return Converter::fileToHtml('content/history/yachts-auto-barons.md');
    }
}
