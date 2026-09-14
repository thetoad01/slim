@extends('layouts.app')

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $article->hullNo }} · {{ $article->tag }} · {{ $part['kicker'] }}</p>
            <h1>{{ $part['heroTitle'] }}</h1>
            <p class="hero-lede">{{ $part['lede'] }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#paper">This part</a>
                <a class="btn btn-ghost" href="{{ $article->path() }}#contents">Back to the report</a>
            </div>
        </div>
    </section>

    <section class="case-body" id="paper">
        <div class="container">
            @foreach ($blocks as $block)
                @if ($block['type'] === 'heading')
                    @if (! empty($block['id']))
                        <h2 id="{{ $block['id'] }}">{{ $block['text'] }}</h2>
                    @else
                        <h2>{{ $block['text'] }}</h2>
                    @endif
                @elseif ($block['type'] === 'list')
                    <ul class="article-list">
                        @foreach ($block['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @elseif ($block['type'] === 'note')
                    <p class="hearing-note">{{ $block['text'] }}</p>
                @else
                    <p>{{ $block['text'] }}</p>
                @endif
            @endforeach

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
