@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $clipping['hullNo'] }} · Press · Archive</p>
            <h1>{{ $clipping['title'] }}</h1>
            <p class="hero-lede">{{ $clipping['summary'] }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#paper">The clipping</a>
                <a class="btn btn-ghost" href="/shipbuild/clippings#press">Back to News clippings</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">By</div>
                    <p class="mb-0">{{ $clipping['byline'] }}</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">From</div>
                    <p class="mb-0">{{ $clipping['presented'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body" id="paper">
        <div class="container">
            <x-article-blocks :blocks="$clipping['blocks']" />
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
