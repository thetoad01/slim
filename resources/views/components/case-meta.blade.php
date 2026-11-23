@props(['meta'])

<section class="case-meta">
    <div class="container">
        <div class="row gy-4">
            @foreach ($meta as $item)
                <div class="{{ $loop->first ? 'col-md-4' : 'col-md-8' }}">
                    <div class="tag">{{ $item['label'] }}</div>
                    <p class="mb-0">
                        @if ($item['html'] ?? false)
                            {!! $item['text'] !!}
                        @else
                            {{ $item['text'] }}
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
