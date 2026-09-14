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
            @php $inList = false; @endphp
            @foreach ($blocks as $block)
                @if ($block['type'] === 'li')
                    @if (! $inList)
                        <ul class="article-list">
                        @php $inList = true; @endphp
                    @endif
                    <li>{{ $block['text'] }}</li>
                @else
                    @if ($inList)
                        </ul>
                        @php $inList = false; @endphp
                    @endif
                    @if ($block['type'] === 'heading')
                        <h2>{{ $block['text'] }}</h2>
                    @elseif ($block['type'] === 'note')
                        <p class="hearing-note">{{ $block['text'] }}</p>
                    @elseif ($block['type'] === 'speech')
                        <p><span class="hearing-speaker">{{ $block['speaker'] }}.</span> {{ $block['text'] }}</p>
                    @else
                        <p>{{ $block['text'] }}</p>
                    @endif
                @endif
            @endforeach
            @if ($inList)
                </ul>
            @endif
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
