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
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    @foreach ($block['items'] as $item)
                        <div class="col">
                            <x-article-figure :figure="$item" />
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif (($block['type'] ?? '') === 'list')
            @if (! empty($block['ordered']))
                <ol class="article-list{{ empty($block['class']) ? '' : ' ' . $block['class'] }}">
                    @foreach ($block['items'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            @elseif (($block['class'] ?? '') === 'columns-2')
                <ul class="article-list list-unstyled row row-cols-1 row-cols-md-2 gy-1 gx-4 ps-0">
                    @foreach ($block['items'] as $item)
                        <li class="col mb-0">{{ $item }}</li>
                    @endforeach
                </ul>
            @else
                <ul class="article-list{{ empty($block['class']) ? '' : ' ' . $block['class'] }}">
                    @foreach ($block['items'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endif
        @elseif (($block['type'] ?? '') === 'table')
            <div class="article-table">
                <table>
                    @if (! empty($block['headers']))
                        <thead>
                            <tr>
                                @foreach ($block['headers'] as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @foreach ($block['rows'] as $row)
                            <tr>
                                @foreach ($row as $cell)
                                    <td>{{ $cell }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
