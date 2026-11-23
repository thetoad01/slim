@props(['hero'])

<section class="hero hero-compact">
    <div class="container hero-inner">
        <p class="kicker">Hull {{ $hero['hull'] }} · {{ $hero['tag'] }} · {{ $hero['mark'] }}</p>
        <h1>{{ $hero['title'] }}</h1>
        <p class="hero-lede">{{ $hero['lede'] }}</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
            <a class="btn btn-copper" href="{{ $hero['primaryHref'] }}">{{ $hero['primaryLabel'] }}</a>
            <a class="btn btn-ghost" href="{{ $hero['backHref'] ?? '/history#articles' }}">{{ $hero['backLabel'] ?? 'Back to History' }}</a>
        </div>
    </div>
</section>
