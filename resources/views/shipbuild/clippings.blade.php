@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#press">The clippings</a>
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Hold</div>
                    <p class="mb-0">Outside press. Newspapers about the company and its ships.</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">In the stack</div>
                    <p class="mb-0">Each clipping is its own page. More will be posted as they come in.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="press">
        <div class="container">
            <p class="kicker">Yard list</p>
            <h2 class="display mb-5">News clippings</h2>

            @foreach ($clippings as $clipping)
                <article class="work-item">
                    <div class="hull-no">{{ $clipping['hullNo'] }}</div>
                    <div>
                        <div class="tag">{{ $clipping['tag'] }}</div>
                        <h3>{{ $clipping['title'] }}</h3>
                        <p>{{ $clipping['summary'] }}</p>
                    </div>
                    <a class="work-link" href="/shipbuild/clippings/{{ $clipping['slug'] }}">{{ $clipping['linkLabel'] }}</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">A clipping we should hold, a name in the paper, a correction to the record.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection
