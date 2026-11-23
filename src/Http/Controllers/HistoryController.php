<?php

namespace App\Http\Controllers;

use App\History\Articles;
use App\History\WartimeHistory;
use App\Http\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;

final class HistoryController extends Controller
{
    public function index(Request $request, Response $response): Response
    {
        return $this->render($response, 'history.landing', [
            'title' => 'Defoe Shipbuilding · History',
            'history' => Articles::project(),
            'articles' => Articles::all(),
        ]);
    }

    public function show(Request $request, Response $response, array $args): Response
    {
        $page = Articles::page((string) $args['slug']);

        if ($page === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, $page['view'], [
            'title' => $page['hero']['title'] . ' · Defoe Shipbuilding',
            'hero' => $page['hero'],
            ...$page['data'],
        ]);
    }

    public function part(Request $request, Response $response, array $args): Response
    {
        $slug = (string) $args['slug'];
        $article = Articles::findArticleBySlug('wartime-history');
        $part = WartimeHistory::find($slug);

        if ($article === null || $part === null) {
            throw new HttpNotFoundException($request);
        }

        $hero = WartimeHistory::hero($article, $part);

        return $this->render($response, 'history.wartime-history-part', [
            'title' => $hero['title'] . ' · Defoe Shipbuilding',
            'hero' => $hero,
            'continue' => WartimeHistory::continueAfter($slug),
            ...WartimeHistory::content($part),
        ]);
    }
}
