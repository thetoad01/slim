@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $article->hullNo }} · {{ $article->tag }} · 27 May 1946</p>
            <h1>{{ $article->title }}</h1>
            <p class="hero-lede">{{ $article->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#contents">Contents</a>
                <a class="btn btn-ghost" href="/history#articles">Back to History</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Author</div>
                    <p class="mb-0">{{ $byline }}</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">BuShips letters</div>
                    <p class="mb-0">{{ $letters }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body">
        <div class="container">
            <h2>About this document</h2>
            <p>{{ $about }}</p>
        </div>
    </section>

    <section class="work" id="contents">
        <div class="container">
            <p class="kicker">1946 report</p>
            <h2 class="display mb-5">Contents</h2>

            @foreach ($parts as $part)
                <article class="work-item unnumbered">
                    <div>
                        <div class="tag">{{ $part['kicker'] }} · pp. {{ $part['pages'] }}</div>
                        <h3>{{ $part['title'] }}</h3>
                        <p>{{ $part['summary'] }}</p>
                    </div>
                    <a class="work-link" href="{{ $article->path() }}/{{ $part['slug'] }}">Read</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="case-body">
        <div class="container">
            <h2>Exhibits</h2>
            <ul class="article-list">
                @foreach ($exhibits as $exhibit)
                    <li>{{ $exhibit }}</li>
                @endforeach
            </ul>
            <p class="hearing-note">{{ $exhibitsNote }}</p>
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
