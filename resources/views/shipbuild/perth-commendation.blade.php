@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $item->hullNo }} · {{ $item->tag }} · Miscellaneous</p>
            <h1>{{ $item->title }}</h1>
            <p class="hero-lede">{{ $item->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#cover">The cover</a>
                <a class="btn btn-ghost" href="/shipbuild/miscellaneous#holdings">Back to Miscellaneous</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">By</div>
                    <p class="mb-0">{{ $byline }}</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">From</div>
                    <p class="mb-0">{{ $presented }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body" id="cover">
        <div class="container">
            <figure class="article-figure">
                <img src="{{ $cover['src'] }}" alt="{{ $cover['caption'] }}">
                <figcaption>{{ $cover['caption'] }}</figcaption>
            </figure>
            <figure class="article-figure" id="inside-cover">
                <img src="{{ $insideCover['src'] }}" alt="{{ $insideCover['caption'] }}">
                <figcaption>{{ $insideCover['caption'] }}</figcaption>
            </figure>
        </div>
    </section>

    <section class="work" id="contents">
        <div class="container">
            <p class="kicker">1969 pamphlet</p>
            <h2 class="display mb-5">Contents</h2>

            @foreach ($sections as $section)
                <article class="work-item unnumbered">
                    <div>
                        <h3>{{ $section['title'] }}</h3>
                        <p>{{ $section['summary'] }}</p>
                    </div>
                    @if (! empty($section['href']))
                        <a class="work-link" href="{{ $section['href'] }}">Open</a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

    <section class="case-body" id="paper">
        <div class="container">
            @foreach ($blocks as $block)
                @if ($block['type'] === 'heading' && ($block['level'] ?? 2) === 3)
                    <h3 id="{{ $block['id'] }}">{{ $block['text'] }}</h3>
                @elseif ($block['type'] === 'heading')
                    <h2 id="{{ $block['id'] }}">{{ $block['text'] }}</h2>
                @elseif ($block['type'] === 'figure')
                    <figure class="article-figure{{ empty($block['class']) ? '' : ' ' . $block['class'] }}"@if (! empty($block['id'])) id="{{ $block['id'] }}"@endif>
                        <img src="{{ $block['src'] }}" alt="{{ $block['caption'] }}">
                        <figcaption>{{ $block['caption'] }}</figcaption>
                    </figure>
                @elseif ($block['type'] === 'figures')
                    <div class="article-figures{{ empty($block['class']) ? '' : ' ' . $block['class'] }}">
                        @foreach ($block['items'] as $item)
                            <figure class="article-figure"@if (! empty($item['id'])) id="{{ $item['id'] }}"@endif>
                                <img src="{{ $item['src'] }}" alt="{{ $item['caption'] }}">
                                <figcaption>{{ $item['caption'] }}</figcaption>
                            </figure>
                        @endforeach
                    </div>
                @else
                    <p>{{ $block['text'] }}</p>
                @endif
            @endforeach
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">A name on the pamphlet, a photograph from the ceremony, a correction to the record.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
