<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use App\Shipbuild\Archive;
use App\Shipbuild\Clippings;
use App\Shipbuild\ErnestRBreech;
use App\Shipbuild\FamilyPapers;
use App\Shipbuild\InvestigationWarEffort;
use App\Shipbuild\Miscellaneous;
use App\Shipbuild\PerthCommendation;
use App\Shipbuild\Photographs;
use App\Shipbuild\RelatedLinks;
use App\Shipbuild\UpsideDownAdvertisement;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;

final class ShipbuildController extends Controller
{
    public function index(Request $request, Response $response): Response
    {
        $archive = Archive::project();

        return $this->render($response, 'shipbuild.landing', [
            'title' => 'Defoe Shipbuilding · Archives',
            'theme' => 'theme-yard',
            'archive' => $archive,
            'rooms' => Archive::rooms(),
        ]);
    }

    public function show(Request $request, Response $response, array $args): Response
    {
        $room = Archive::findRoomBySlug((string) $args['slug']);

        if ($room === null) {
            throw new HttpNotFoundException($request);
        }

        $payload = [
            'title' => $room->title . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'room' => $room,
        ];

        if ($room->slug === 'related-links') {
            $payload['links'] = RelatedLinks::all();

            return $this->render($response, 'shipbuild.related-links', $payload);
        }

        if ($room->slug === 'photographs') {
            $payload['photographs'] = Photographs::all();

            return $this->render($response, 'shipbuild.photographs', $payload);
        }

        if ($room->slug === 'clippings') {
            $payload['clippings'] = Clippings::all();

            return $this->render($response, 'shipbuild.clippings', $payload);
        }

        if ($room->slug === 'family') {
            $payload['papers'] = FamilyPapers::all();

            return $this->render($response, 'shipbuild.family', $payload);
        }

        if ($room->slug === 'miscellaneous') {
            $payload['items'] = Miscellaneous::all();

            return $this->render($response, 'shipbuild.miscellaneous', $payload);
        }

        return $this->render($response, 'shipbuild.room', $payload);
    }

    public function clipping(Request $request, Response $response, array $args): Response
    {
        $clipping = Clippings::findBySlug((string) $args['slug']);

        if ($clipping === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'shipbuild.clipping', [
            'title' => $clipping['title'] . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'clipping' => $clipping,
        ]);
    }

    public function miscellaneousItem(Request $request, Response $response, array $args): Response
    {
        $item = Miscellaneous::findBySlug((string) $args['slug']);

        if ($item === null) {
            throw new HttpNotFoundException($request);
        }

        if ($item->slug === 'ernest-r-breech-naming') {
            return $this->render($response, 'shipbuild.ernest-r-breech', [
                'title' => $item->title . ' · Defoe Shipbuilding',
                'theme' => 'theme-yard',
                'item' => $item,
                'byline' => ErnestRBreech::byline(),
                'presented' => ErnestRBreech::presented(),
                'cover' => ErnestRBreech::cover(),
                'sections' => ErnestRBreech::sections(),
                'blocks' => ErnestRBreech::blocks(),
            ]);
        }

        if ($item->slug === 'how-defoe-turns-things-upside-down') {
            return $this->render($response, 'shipbuild.miscellaneous-item', [
                'title' => $item->title . ' · Defoe Shipbuilding',
                'theme' => 'theme-yard',
                'item' => $item,
                'byline' => UpsideDownAdvertisement::byline(),
                'presented' => UpsideDownAdvertisement::presented(),
                'blocks' => UpsideDownAdvertisement::blocks(),
            ]);
        }

        if ($item->slug !== 'perth-commendation') {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'shipbuild.perth-commendation', [
            'title' => $item->title . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'item' => $item,
            'byline' => PerthCommendation::byline(),
            'presented' => PerthCommendation::presented(),
            'cover' => PerthCommendation::cover(),
            'insideCover' => PerthCommendation::insideCover(),
            'sections' => PerthCommendation::sections(),
            'blocks' => PerthCommendation::blocks(),
        ]);
    }

    public function paper(Request $request, Response $response, array $args): Response
    {
        $paper = FamilyPapers::findBySlug((string) $args['slug']);

        if ($paper === null) {
            throw new HttpNotFoundException($request);
        }

        if ($paper->slug !== 'investigation-war-effort') {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'shipbuild.investigation-war-effort', [
            'title' => $paper->title . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'paper' => $paper,
            'witness' => InvestigationWarEffort::witness(),
            'hearings' => InvestigationWarEffort::hearings(),
            'about' => InvestigationWarEffort::about(),
            'sectionsNote' => InvestigationWarEffort::sectionsNote(),
            'sections' => InvestigationWarEffort::sections(),
            'committee' => InvestigationWarEffort::committee(),
            'staff' => InvestigationWarEffort::staff(),
        ]);
    }

    public function testimony(Request $request, Response $response, array $args): Response
    {
        $paper = FamilyPapers::findBySlug((string) $args['slug']);
        $pages = (string) $args['pages'];
        $section = InvestigationWarEffort::findSection($pages);

        if ($paper === null || $paper->slug !== 'investigation-war-effort' || $section === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'shipbuild.testimony', [
            'title' => $section['label'] . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'paper' => $paper,
            'section' => $section,
            'blocks' => InvestigationWarEffort::blocksFor($pages),
        ]);
    }
}
