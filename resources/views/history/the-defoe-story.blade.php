@extends('layouts.app')

@section('content')

    <x-hero-history :hero="$hero" />

    <x-case-meta :meta="$meta" />

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
