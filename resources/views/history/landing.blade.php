@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $history->hullNo }} · {{ $history->tag }} · 1905–1976</p>
            <h1>Defoe<span>History</span></h1>
            <p class="hero-lede">{{ $history->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#articles">The articles</a>
                <a class="btn btn-ghost" href="/#yard">Back to the yard</a>
            </div>
            <svg class="hull-line" viewBox="0 0 1200 80" fill="none" aria-hidden="true">
                <path d="M20 48 C 180 48, 220 18, 380 22 C 560 28, 620 62, 820 50 C 980 40, 1080 28, 1180 30" stroke="currentColor" stroke-width="2"/>
                <path d="M20 58 C 200 58, 260 36, 420 40 C 640 46, 700 70, 900 58 C 1040 50, 1120 42, 1180 44" stroke="currentColor" stroke-width="1" opacity="0.45"/>
            </svg>
        </div>
    </section>

    <section class="work" id="articles">
        <div class="container">
            @foreach ($articles as $article)
                <article class="work-item">
                    <div class="hull-no">{{ $article->hullNo }}</div>
                    <div>
                        <div class="tag">{{ $article->tag }}</div>
                        <h3>{{ $article->title }}</h3>
                        <p>{{ $article->summary }}</p>
                    </div>
                    @if ($article->path())
                        <a class="work-link" href="{{ $article->path() }}">{{ $article->linkLabel }}</a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

@endsection
