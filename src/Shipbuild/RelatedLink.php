<?php

namespace App\Shipbuild;

final readonly class RelatedLink
{
    public function __construct(
        public string $source,
        public string $title,
        public string $url,
        public string $summary,
        public ?string $credit = null,
    ) {
    }
}
