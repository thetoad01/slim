<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipbuildController;
use App\Http\Controllers\SitemapController;

$app->get('/', [HomeController::class, 'index']);
$app->get('/sitemap.xml', SitemapController::class);
$app->post('/contact', [ContactController::class, 'store']);
$app->get('/history', [HistoryController::class, 'index']);
$app->get('/history/wartime-history/{slug}', [HistoryController::class, 'part']);
$app->get('/history/{slug}', [HistoryController::class, 'show']);
$app->get('/shipbuild', [ShipbuildController::class, 'index']);

// Legacy archive URLs. Register before /shipbuild/{slug} so they do not 404.
$app->redirect('/shipbuild/defoe_menu.html', '/shipbuild', 301);
$app->redirect('/shipbuild/gallery', '/shipbuild/photographs', 301);
$app->redirect('/shipbuild/inthenews', '/shipbuild/clippings', 301);
$app->get('/shipbuild/inthenews/{slug}', function ($request, $response, array $args) {
    $slug = \App\Shipbuild\Clippings::slugFromLegacy((string) $args['slug']);

    $location = $slug === null
        ? '/shipbuild/clippings'
        : '/shipbuild/clippings/' . $slug;

    return $response
        ->withHeader('Location', $location)
        ->withStatus(301);
});
$app->redirect('/shipbuild/the-defoe-rollover', '/shipbuild/the-rollover', 301);
$app->redirect('/shipbuild/links', '/shipbuild/related-links', 301);
$app->redirect('/shipbuild/defoe-story', '/history/the-defoe-story', 301);
$app->redirect('/shipbuild/TheDefoeStory.htm', '/history/the-defoe-story', 301);
$app->redirect('/shipbuild/defoe-history01.htm', '/history/swanson', 301);
$app->redirect('/shipbuild/swanson-history', '/history/swanson', 301);
$app->redirect('/shipbuild/yachts-auto-barons', '/history/yachts-auto-barons', 301);
$app->redirect('/shipbuild/offices-supervisor/wartime-history', '/history/wartime-history', 301);
$app->get('/shipbuild/offices-supervisor/table-of-contents', function ($request, $response) {
    return $response
        ->withHeader('Location', '/history/wartime-history#contents')
        ->withStatus(301);
});
$app->redirect('/shipbuild/offices-supervisor/preface', '/history/wartime-history/preface', 301);
$app->get('/shipbuild/offices-supervisor/introduction', function ($request, $response) {
    return $response
        ->withHeader('Location', '/history/wartime-history/preface#introduction')
        ->withStatus(301);
});
$app->redirect('/shipbuild/offices-supervisor/part-1', '/history/wartime-history/part-i', 301);
$app->redirect('/shipbuild/offices-supervisor/part-2', '/history/wartime-history/part-ii', 301);
$app->redirect('/shipbuild/offices-supervisor/part-3', '/history/wartime-history/part-iii', 301);
$app->redirect('/shipbuild/offices-supervisor/part-4', '/history/wartime-history/part-iv', 301);
$app->redirect('/shipbuild/offices-supervisor/part-5', '/history/wartime-history/part-v', 301);
$app->redirect('/shipbuild/offices-supervisor/part-6', '/history/wartime-history/part-vi', 301);
$app->redirect('/shipbuild/offices-supervisor/part-7', '/history/wartime-history/part-vii', 301);
$app->redirect('/shipbuild/offices-supervisor/part-8', '/history/wartime-history/part-viii', 301);
$app->redirect('/shipbuild/offices-supervisor/part-9', '/history/wartime-history/part-ix', 301);
$app->redirect('/shipbuild/investigation-war-effort', '/shipbuild/family/investigation-war-effort', 301);
$app->get('/shipbuild/investigation-war-effort/testimony/{pages}', function ($request, $response, array $args) {
    return $response
        ->withHeader('Location', '/shipbuild/family/investigation-war-effort/testimony/' . $args['pages'])
        ->withStatus(301);
});

$app->get('/shipbuild/family/{slug}', [ShipbuildController::class, 'paper']);
$app->get('/shipbuild/family/{slug}/testimony/{pages}', [ShipbuildController::class, 'testimony']);
$app->get('/shipbuild/clippings/{slug}', [ShipbuildController::class, 'clipping']);
$app->redirect('/shipbuild/perth-commendation', '/shipbuild/miscellaneous/perth-commendation', 301);
$app->get('/shipbuild/miscellaneous/{slug}', [ShipbuildController::class, 'miscellaneousItem']);
$app->get('/shipbuild/{slug}', [ShipbuildController::class, 'show']);
