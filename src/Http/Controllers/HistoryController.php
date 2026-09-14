<?php

namespace App\Http\Controllers;

use App\History\Articles;
use App\History\DefoeStory;
use App\History\Swanson;
use App\History\WartimeHistory;
use App\History\YachtsAutoBarons;
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
        $article = Articles::findArticleBySlug((string) $args['slug']);

        if ($article === null) {
            throw new HttpNotFoundException($request);
        }

        if ($article->slug === 'the-defoe-story') {
            return $this->render($response, 'history.the-defoe-story', [
                'title' => $article->title . ' · Defoe Shipbuilding',
                'article' => $article,
                'byline' => DefoeStory::byline(),
                'presented' => DefoeStory::presented(),
                'cover' => DefoeStory::cover(),
                'chapters' => DefoeStory::chapters(),
                'blocks' => DefoeStory::blocks(),
            ]);
        }

        if ($article->slug === 'swanson') {
            return $this->render($response, 'history.swanson', [
                'title' => $article->title . ' · Defoe Shipbuilding',
                'article' => $article,
                'byline' => Swanson::byline(),
                'presented' => Swanson::presented(),
                'image' => Swanson::imagePath(),
                'caption' => Swanson::imageCaption(),
                'paragraphs' => Swanson::paragraphs(),
            ]);
        }

        if ($article->slug === 'yachts-auto-barons') {
            return $this->render($response, 'history.yachts-auto-barons', [
                'title' => $article->title . ' · Defoe Shipbuilding',
                'article' => $article,
                'byline' => YachtsAutoBarons::byline(),
                'presented' => YachtsAutoBarons::presented(),
                'sourceUrl' => YachtsAutoBarons::sourceUrl(),
                'blocks' => YachtsAutoBarons::blocks(),
            ]);
        }

        if ($article->slug === 'wartime-history') {
            return $this->render($response, 'history.wartime-history', [
                'title' => $article->title . ' · Defoe Shipbuilding',
                'article' => $article,
                'byline' => WartimeHistory::byline(),
                'letters' => WartimeHistory::letters(),
                'about' => WartimeHistory::about(),
                'parts' => WartimeHistory::parts(),
                'exhibits' => WartimeHistory::exhibits(),
                'exhibitsNote' => WartimeHistory::exhibitsNote(),
            ]);
        }

        throw new HttpNotFoundException($request);
    }

    public function part(Request $request, Response $response, array $args): Response
    {
        $article = Articles::findArticleBySlug('wartime-history');
        $part = WartimeHistory::findPart((string) $args['slug']);

        if ($article === null || $part === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->render($response, 'history.wartime-history-part', [
            'title' => $part['heroTitle'] . ' · Defoe Shipbuilding',
            'article' => $article,
            'part' => $part,
            'blocks' => WartimeHistory::blocksFor($part['slug']),
            'continue' => WartimeHistory::continueAfter($part['slug']),
        ]);
    }
}
