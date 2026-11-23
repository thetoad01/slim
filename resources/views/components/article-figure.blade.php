@props(['figure'])

<figure class="article-figure{{ empty($figure['class']) ? '' : ' ' . $figure['class'] }}"@if (! empty($figure['id'])) id="{{ $figure['id'] }}"@endif>
    @if (! empty($figure['src']))
        @if (! empty($figure['link']))
            <a href="{{ $figure['src'] }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ $figure['src'] }}" alt="{{ $figure['alt'] ?? $figure['caption'] ?? '' }}">
            </a>
        @else
            <img src="{{ $figure['src'] }}" alt="{{ $figure['alt'] ?? $figure['caption'] ?? '' }}">
        @endif
    @else
        <div class="article-figure-placeholder" role="img" aria-label="{{ $figure['caption'] ?? '' }} Photograph not posted yet.">
            {{ $figure['placeholder'] ?? '' }}
        </div>
    @endif
    @if (! empty($figure['caption']))
        <figcaption>{{ $figure['caption'] }}</figcaption>
    @endif
</figure>
