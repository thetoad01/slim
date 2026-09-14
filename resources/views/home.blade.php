@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="container hero-inner">
            <p class="kicker">Bay City, Michigan · 1905–1976</p>
            <h1>Defoe<span>Yards</span></h1>
            <p class="hero-lede">A family record of the yard on the Saginaw River. Wood, then steel, then hulls that are still afloat.</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a class="btn btn-rust" href="/history">The history</a>
                <a class="btn btn-copper" href="/shipbuild">The archive</a>
                <a class="btn btn-ghost" href="#yard">The yard</a>
            </div>
            <svg class="hull-line" viewBox="0 0 1200 80" fill="none" aria-hidden="true">
                <path d="M20 48 C 180 48, 220 18, 380 22 C 560 28, 620 62, 820 50 C 980 40, 1080 28, 1180 30" stroke="currentColor" stroke-width="2"/>
                <path d="M20 58 C 200 58, 260 36, 420 40 C 640 46, 700 70, 900 58 C 1040 50, 1120 42, 1180 44" stroke="currentColor" stroke-width="1" opacity="0.45"/>
            </svg>
        </div>
        <div class="marquee" aria-hidden="true">
            <span>PC-461 &nbsp;·&nbsp; Honey Fitz &nbsp;·&nbsp; roll-over &nbsp;·&nbsp; DE-136 &nbsp;·&nbsp; AM-56 &nbsp;·&nbsp; YMS-175 &nbsp;·&nbsp; PCE-872 &nbsp;·&nbsp; USS Saginaw &nbsp;·&nbsp; Defoe-built on the Saginaw River &nbsp;·&nbsp; 1905–1976 &nbsp;·&nbsp;</span>
        </div>
    </section>

    <section class="split" id="about">
        <div class="split-panel dark">
            <p class="kicker">The archive</p>
            <h2 class="display">What the<br>yard left</h2>
            <p>Photographs, clippings, company history, and primary documents from Defoe Shipbuilding Company. Knock-down boats and custom yachts. Warships for two oceans. Commercial hulls for the lakes.</p>
            <p>This is the family record of the yard.</p>
        </div>
        <div class="split-panel paper">
            <p class="kicker">Then</p>
            <h2 class="display">A river<br>that built navies</h2>
            <p class="mb-0">Harry J. Defoe and his brothers opened ways on the Saginaw River in 1905. Wooden boats, then steel, then a wartime cadence that sent escorts and sweepers to two oceans. The standard was the same: will it take weather?</p>
        </div>
    </section>

    <section class="yard" id="yard">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <p class="kicker">The yard</p>
                    <h2 class="display">Defoe Shipbuilding</h2>
                    <p>Bay City, Michigan. From a small yard to one of the Great Lakes’ wartime builders. Destroyer escorts, minesweepers, patrol craft, yachts — including the presidential yacht later named <em>Honey Fitz</em> — commercial hulls. The river sent them out and some of them are still afloat.</p>
                    <p class="mb-0">The gates closed in 1976. The name did not.</p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a class="work-link d-inline-block" href="/history">Read the history</a>
                        <a class="work-link d-inline-block" href="/shipbuild">Enter the archive</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <ol class="timeline">
                        <li>
                            <time>1905</time>
                            <div>The brothers establish the yard. Wood first. Steel as the river industrializes.</div>
                        </li>
                        <li>
                            <time>1917</time>
                            <div>World War I. Naval work at a nation’s pace. The yard learns what urgency looks like in steel.</div>
                        </li>
                        <li>
                            <time>1931</time>
                            <div>The 93-foot <em>Lenore</em> leaves the ways for Sewell Avery. The government takes her in the war; five presidents keep her. Kennedy names her <em>Honey Fitz</em> for his grandfather. A Bay City yacht in Camelot.</div>
                        </li>
                        <li>
                            <time>1941</time>
                            <div>Ships built keel-up in reverse: welded upside down, then rolled onto their feet. An assembly line for hulls, the way Detroit built cars.</div>
                        </li>
                        <li>
                            <time>1942</time>
                            <div>The war order book. Escorts, sweepers, patrol craft for the Atlantic and the Pacific. Bay City becomes a war port inland. One PC a week, because the hull already knows which way is up.</div>
                        </li>
                        <li>
                            <time>1946</time>
                            <div>Peacetime order book: yachts and commercial vessels on the same berths that launched the war.</div>
                        </li>
                        <li>
                            <time>1976</time>
                            <div>The ways go quiet. What remains is hulls, paychecks, and a standard the work still has to meet.</div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <p class="kicker">Write</p>
            <p class="measure mb-4">Photograph identifications, vessel inquiries, family notes for the archive.</p>
            <x-contact-form />
        </div>
    </section>

@endsection
