@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $article->hullNo }} · {{ $article->tag }} · Brochure</p>
            <h1>{{ $article->title }}</h1>
            <p class="hero-lede">{{ $article->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#cover">The brochure</a>
                <a class="btn btn-ghost" href="/history#articles">Back to History</a>
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
                @if (! empty($cover['src']))
                    <img src="{{ $cover['src'] }}" alt="{{ $cover['caption'] }}">
                @else
                    <div class="article-figure-placeholder" role="img" aria-label="{{ $cover['caption'] }} Photograph not posted yet.">
                        {{ $cover['placeholder'] }}
                    </div>
                @endif
                <figcaption>{{ $cover['caption'] }}</figcaption>
            </figure>
        </div>
    </section>

    <section class="work" id="contents">
        <div class="container">
            <p class="kicker">Company brochure</p>
            <h2 class="display mb-5">Contents</h2>

            @foreach ($chapters as $chapter)
                <article class="work-item unnumbered">
                    <div>
                        <div class="tag">pp. {{ $chapter['pages'] }}</div>
                        <h3>{{ $chapter['title'] }}</h3>
                        <p>{{ $chapter['span'] }}</p>
                    </div>
                    <a class="work-link" href="#{{ $chapter['id'] }}">Read</a>
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
