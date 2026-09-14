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

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Hold</div>
                    <p class="mb-0">Pointers. Not our paper.</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">In view</div>
                    <p class="mb-0">Other yards, other archives, other people still keeping Great Lakes shipbuilding in sight. Cruisemaster yachts, the roll-over, the war order book, vessel lists, and ships that left this river.</p>
                </div>
            </div>
        </div>
    </section>

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
