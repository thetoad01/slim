@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#papers">The papers</a>
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

    <section class="work" id="papers">
        <div class="container">
            <p class="kicker">Yard list</p>
            <h2 class="display mb-5">Family papers</h2>

            @foreach ($papers as $paper)
                <article class="work-item">
                    <div class="hull-no">{{ $paper->hullNo }}</div>
                    <div>
                        <div class="tag">{{ $paper->tag }}</div>
                        <h3>{{ $paper->title }}</h3>
                        <p>{{ $paper->summary }}</p>
                    </div>
                    @if ($paper->path())
                        <a class="work-link" href="{{ $paper->path() }}">{{ $paper->linkLabel }}</a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">Family notes, photograph identifications, vessel inquiries.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
