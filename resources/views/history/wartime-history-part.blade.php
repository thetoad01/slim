@extends('layouts.app')

@section('content')

    <x-hero-history :hero="$hero" />

    <section class="case-body" id="paper">
        <div class="container">
            @isset($html)
                {!! $html !!}
            @else
                <x-article-blocks :blocks="$blocks" />
            @endisset

            <div class="mt-5">
                <a class="btn btn-copper" href="{{ $continue['href'] }}">{{ $continue['label'] }}</a>
            </div>
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
