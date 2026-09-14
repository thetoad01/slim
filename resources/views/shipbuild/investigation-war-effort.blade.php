@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $paper->hullNo }} · {{ $paper->tag }} · June 1943</p>
            <h1>{{ $paper->title }}</h1>
            <p class="hero-lede">{{ $paper->lede }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#sections">The testimony</a>
                <a class="btn btn-ghost" href="/shipbuild/family#papers">Back to Family</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Witness</div>
                    <p class="mb-0">{{ $witness }}</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">Hearings</div>
                    <p class="mb-0">{{ $hearings }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body">
        <div class="container">
            <h2>About this archive</h2>
            <p>{{ $about }}</p>
            <p>{{ $sectionsNote }}</p>
        </div>
    </section>

    <section class="work" id="sections">
        <div class="container">
            <p class="kicker">Printed volume</p>
            <h2 class="display mb-5">Testimony</h2>

            @foreach ($sections as $section)
                <article class="work-item unnumbered">
                    <div>
                        <div class="tag">Pages {{ $section['pages'] }}</div>
                        <h3>{{ $section['label'] }}</h3>
                        <p>{{ $section['summary'] }}</p>
                    </div>
                    <a class="work-link" href="{{ $paper->path() }}/testimony/{{ $section['pages'] }}">Read</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="case-body">
        <div class="container">
            <h2>Naval Affairs Investigating Committee</h2>
            <ul class="ruled list-unstyled measure">
                @foreach ($committee as $member)
                    <li>{{ $member }}</li>
                @endforeach
            </ul>
            <ul class="ruled list-unstyled measure mt-4">
                @foreach ($staff as $officer)
                    <li>{{ $officer }}</li>
                @endforeach
            </ul>
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
