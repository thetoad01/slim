<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use App\Sitemap;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class SitemapController extends Controller
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write(Sitemap::xml());

        return $response->withHeader('Content-Type', 'application/xml; charset=UTF-8');
    }
}
