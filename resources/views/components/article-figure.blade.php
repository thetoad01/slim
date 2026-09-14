@props(['figure'])

<figure class="article-figure{{ empty($figure['class']) ? '' : ' ' . $figure['class'] }}"@if (! empty($figure['id'])) id="{{ $figure['id'] }}"@endif>
    @if (! empty($figure['src']))
        <img src="{{ $figure['src'] }}" alt="{{ $figure['caption'] ?? '' }}">
    @else
        <div class="article-figure-placeholder" role="img" aria-label="{{ $figure['caption'] ?? '' }} Photograph not posted yet.">
            {{ $figure['placeholder'] ?? '' }}
        </div>
    @endif
    @if (! empty($figure['caption']))
        <figcaption>{{ $figure['caption'] }}</figcaption>
    @endif
</figure>
