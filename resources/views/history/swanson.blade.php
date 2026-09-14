@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $article->hullNo }} · {{ $article->tag }} · May 21, 1964</p>
            <h1>{{ $article->title }}</h1>
            <p class="hero-lede">{{ $article->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#paper">The paper</a>
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
                    <div class="tag">Read</div>
                    <p class="mb-0">{{ $presented }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body" id="paper">
        <div class="container">
            <figure class="article-figure">
                <img src="{{ $image }}" alt="{{ $caption }}" width="600" height="429">
                <figcaption>{{ $caption }}</figcaption>
            </figure>

            @foreach ($paragraphs as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
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
