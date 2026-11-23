<?php

namespace App\History;

use App\Markdown\Converter;

final class Swanson
{
    public static function html(): string
    {
        return Converter::fileToHtml('content/history/swanson.md');
    }
}
