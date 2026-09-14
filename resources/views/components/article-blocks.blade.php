@props(['blocks'])

@php $inList = false; @endphp
@foreach ($blocks as $block)
    @if (($block['type'] ?? '') === 'li')
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

        @if (($block['type'] ?? '') === 'heading')
            @if (! empty($block['pages']))
                <div class="tag">pp. {{ $block['pages'] }}</div>
            @endif
            @php $headingTag = (($block['level'] ?? 2) === 3) ? 'h3' : 'h2'; @endphp
            @if (! empty($block['id']))
                @if ($headingTag === 'h3')
                    <h3 id="{{ $block['id'] }}">{{ $block['text'] }}</h3>
                @else
                    <h2 id="{{ $block['id'] }}">{{ $block['text'] }}</h2>
                @endif
            @elseif ($headingTag === 'h3')
                <h3>{{ $block['text'] }}</h3>
            @else
                <h2>{{ $block['text'] }}</h2>
            @endif
        @elseif (($block['type'] ?? '') === 'figure')
            <x-article-figure :figure="$block" />
        @elseif (($block['type'] ?? '') === 'figures')
            <div class="article-figures{{ empty($block['class']) ? '' : ' ' . $block['class'] }}">
                @foreach ($block['items'] as $item)
                    <x-article-figure :figure="$item" />
                @endforeach
            </div>
        @elseif (($block['type'] ?? '') === 'list')
            <ul class="article-list">
                @foreach ($block['items'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @elseif (($block['type'] ?? '') === 'signatories')
            <div class="row gy-4 brochure-signatories">
                @foreach ($block['items'] as $signatory)
                    <div class="col-md-6">
                        <p>{{ $signatory['name'] }}</p>
                        <p class="tag">{{ $signatory['title'] }}</p>
                    </div>
                @endforeach
            </div>
        @elseif (($block['type'] ?? '') === 'note' || ($block['type'] ?? '') === 'quote')
            <p class="hearing-note">{{ $block['text'] }}</p>
        @elseif (($block['type'] ?? '') === 'speech')
            <p><span class="hearing-speaker">{{ $block['speaker'] }}.</span> {{ $block['text'] }}</p>
        @else
            <p>{{ $block['text'] ?? '' }}</p>
        @endif
    @endif
@endforeach
@if ($inList)
    </ul>
@endif
