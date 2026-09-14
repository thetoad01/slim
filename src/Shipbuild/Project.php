<?php

namespace App\Shipbuild;

final readonly class Project
{
    public function __construct(
        public string $hullNo,
        public string $tag,
        public string $title,
        public string $summary,
        public ?string $slug = null,
        public ?string $linkLabel = null,
        public ?string $headline = null,
        public ?string $lede = null,
        public ?string $client = null,
        public string $base = '',
    ) {
    }

    public function path(): ?string
    {
        if ($this->slug === null) {
            return null;
        }

        $base = trim($this->base, '/');

        return $base === ''
            ? '/' . $this->slug
            : '/' . $base . '/' . $this->slug;
    }
}
