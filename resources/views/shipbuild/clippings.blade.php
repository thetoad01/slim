@extends('layouts.app')

@section('content')

    <x-hero-archive :hero="$hero" />

    <x-case-meta :meta="$meta" />

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
