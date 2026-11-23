@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="/css/glightbox.min.css">
@endpush

@section('content')

    <section class="hero hero-compact">
        <div class="container hero-inner">
            <p class="kicker">Hull {{ $room->hullNo }} · {{ $room->tag }} · Archive</p>
            <h1>{{ $room->title }}</h1>
            <p class="hero-lede">{{ $room->summary }}</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-copper" href="#pictures">The photographs</a>
                <a class="btn btn-ghost" href="/shipbuild#rooms">Back to the archive</a>
            </div>
        </div>
    </section>

    <section class="case-meta">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="tag">Hold</div>
                    <p class="mb-0">Yard, ways, crews, launches, and hulls.</p>
                </div>
                <div class="col-md-8">
                    <div class="tag">In the stack</div>
                    <p class="mb-0">Three photographs are posted. More will be added as they are prepared.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="case-body" id="pictures">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 photo-grid">
                @foreach ($photographs as $index => $photo)
                    <div class="col">
                        <figure class="article-figure">
                            <a class="gallery-lightbox" href="/media/archive/photographs/{{ $photo['slug'] }}.jpg" data-gallery="photographs" data-title="{{ $photo['title'] }}">
                                <img
                                    src="/media/archive/photographs/thumbs/{{ $photo['slug'] }}.jpg"
                                    alt="{{ $photo['alt'] }}"
                                    width="{{ $photo['width'] }}"
                                    height="{{ $photo['height'] }}"
                                    @if ($index > 2) loading="lazy" @endif
                                >
                            </a>
                            <figcaption>{{ $photo['title'] }}</figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <p class="kicker">Write the archive</p>
            <p class="measure mb-4">A hull in a photograph, a name on the bow, a correction to the record.</p>
            <a class="giant" href="/#contact">Send a note</a>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="/js/glightbox.min.js"></script>
    <script>
        GLightbox({
            selector: '.gallery-lightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
    </script>
@endpush
