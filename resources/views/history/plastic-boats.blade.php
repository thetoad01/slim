@extends('layouts.app')

@section('content')

    <x-hero-history :hero="$hero" />

    <x-case-meta :meta="$meta" />

    <section class="case-body">
        <div class="container">
            <h2>About this document</h2>
            <p>{{ $about }}</p>
        </div>
    </section>

    <section class="work" id="contents">
        <div class="container">
            <p class="kicker">Bureau of Ships report</p>
            <h2 class="display mb-5">Contents</h2>

            @foreach ($parts as $part)
                <article class="work-item unnumbered">
                    <div>
                        <div class="tag">{{ $part['kicker'] }}</div>
                        <h3>{{ $part['title'] }}</h3>
                        @if ($part['summary'] !== '')
                            <p>{{ $part['summary'] }}</p>
                        @endif
                    </div>
                    @if ($part['posted'])
                        <a class="work-link" href="{{ $article->path() }}/{{ $part['slug'] }}">Read</a>
                    @endif
                </article>
            @endforeach

            @if ($appendicesNote !== '')
                <p class="hearing-note mt-4">{{ $appendicesNote }}</p>
            @endif
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
