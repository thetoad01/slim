@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#holdings">The hold</a>
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

    <section class="work" id="holdings">
        <div class="container">
            <p class="kicker">Yard list</p>
            <h2 class="display mb-5">Miscellaneous</h2>

            @foreach ($items as $item)
                <article class="work-item">
                    <div class="hull-no">{{ $item->hullNo }}</div>
                    <div>
                        <div class="tag">{{ $item->tag }}</div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->summary }}</p>
                    </div>
                    @if ($item->path())
                        <a class="work-link" href="{{ $item->path() }}">{{ $item->linkLabel }}</a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">An advertisement, a brochure, a name on a pamphlet, a correction to the record.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
