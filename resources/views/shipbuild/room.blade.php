@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

@endsection
