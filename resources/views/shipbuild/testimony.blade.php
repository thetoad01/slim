@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $paper->hullNo }} · {{ $paper->tag }} · Printed pages {{ $section['pages'] }}</p>
            <h1>{{ $section['label'] }}</h1>
            <p class="hero-lede">{{ $section['summary'] }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#transcript">The transcript</a>
                <a class="btn btn-ghost" href="{{ $paper->path() }}#sections">Back to the hearings</a>
            </div>
        </div>
    </section>

    <section class="case-body" id="transcript">
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
