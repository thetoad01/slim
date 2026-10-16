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
                <a href="{{ $cover['src'] }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{ $cover['src'] }}" alt="{{ $cover['caption'] }}">
                </a>
                <figcaption>{{ $cover['caption'] }}</figcaption>
            </figure>
        </div>
    </section>

    <section class="work" id="contents">
        <div class="container">
            <p class="kicker">1962 pamphlet</p>
            <h2 class="display mb-5">Contents</h2>

            @foreach ($sections as $section)
                <article class="work-item unnumbered">
                    <div>
                        <h3>{{ $section['title'] }}</h3>
                    </div>
                    <a class="work-link" href="#{{ $section['id'] }}">Read</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="case-body" id="paper">
        <div class="container">
            <x-article-blocks :blocks="$blocks" />
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">A name in the paper, a hull he named, a correction to the record.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
