<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use App\Shipbuild\Clippings;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;

final class ClippingsController extends Controller
{
    public function index(Request $request, Response $response): Response
    {
        $page = Clippings::index();

        return $this->render($response, 'shipbuild.clippings', [
            'title' => $page['hero']['title'] . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'hero' => $page['hero'],
            'meta' => $page['meta'],
            'clippings' => $page['clippings'],
        ]);
    }

    public function show(Request $request, Response $response, array $args): Response
    {
        $page = Clippings::page((string) $args['slug']);

        if ($page === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'shipbuild.clipping', [
            'title' => $page['hero']['title'] . ' · Defoe Shipbuilding',
            'theme' => 'theme-yard',
            'hero' => $page['hero'],
            'meta' => $page['meta'],
            'html' => $page['html'],
        ]);
    }
}
