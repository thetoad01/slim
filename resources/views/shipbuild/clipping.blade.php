@extends('layouts.app')

@section('content')

    <x-hero-archive :hero="$hero" />

    <x-case-meta :meta="$meta" />

    <section class="case-body" id="paper">
        <div class="container">
            {!! $html !!}
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
