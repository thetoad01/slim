@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $archive->hullNo }} · {{ $archive->tag }} · 1905–1976</p>
            <h1>Defoe<span>Shipbuilding</span></h1>
            <p class="hero-lede">{{ $archive->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#rooms">The rooms</a>
                <a class="btn btn-ghost" href="/#yard">Back to the yard</a>
            </div>
            <svg class="hull-line" viewBox="0 0 1200 80" fill="none" aria-hidden="true">
                <path d="M20 48 C 180 48, 220 18, 380 22 C 560 28, 620 62, 820 50 C 980 40, 1080 28, 1180 30" stroke="currentColor" stroke-width="2"/>
                <path d="M20 58 C 200 58, 260 36, 420 40 C 640 46, 700 70, 900 58 C 1040 50, 1120 42, 1180 44" stroke="currentColor" stroke-width="1" opacity="0.45"/>
            </svg>
        </div>
        <div class="marquee" aria-hidden="true">
            <span>Bay City, Michigan &nbsp;·&nbsp; 1905–1976 &nbsp;·&nbsp; PC-461 &nbsp;·&nbsp; Honey Fitz &nbsp;·&nbsp; rollover &nbsp;·&nbsp; DE-136 &nbsp;·&nbsp; AM-56 &nbsp;·&nbsp; YMS-175 &nbsp;·&nbsp; PCE-872 &nbsp;·&nbsp; USS Saginaw &nbsp;·&nbsp; Defoe-built on the Saginaw River &nbsp;·&nbsp;</span>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Yard</div>
                    <p class="mb-0">{{ $archive->client }}</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">Hold</div>
                    <p class="mb-0">Photographs, news clippings, <em>The Rollover</em>, family papers, miscellaneous, and related links. Six rooms. One yard.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="rooms">
        <div class="container">
            <p class="kicker">Yard list</p>
            <h2 class="display mb-5">Archive rooms</h2>

            @foreach ($rooms as $room)
                <article class="work-item">
                    <div class="hull-no">{{ $room->hullNo }}</div>
                    <div>
                        <div class="tag">{{ $room->tag }}</div>
                        <h3>{{ $room->title }}</h3>
                        <p>{{ $room->summary }}</p>
                    </div>
                    @if ($room->path())
                        <a class="work-link" href="{{ $room->path() }}">{{ $room->linkLabel }}</a>
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
