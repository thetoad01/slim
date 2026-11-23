@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#index">The index</a>
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

    <x-case-meta :meta="$meta" />

    <section class="work" id="index">
        <div class="container">
            <p class="kicker">Yard list</p>
            <h2 class="display mb-5">Outside the hold</h2>

            @foreach ($links as $link)
                <article class="work-item unnumbered">
                    <div>
                        <div class="tag">{{ $link->source }}</div>
                        <h3>{{ $link->title }}</h3>
                        @if ($link->credit)
                            <p class="mb-2">{{ $link->credit }}</p>
                        @endif
                        <p>{{ $link->summary }}</p>
                    </div>
                    <a class="work-link" href="{{ $link->url }}" target="_blank" rel="noopener noreferrer">Visit</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">A yard, an archive, or a page we should keep in view.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
