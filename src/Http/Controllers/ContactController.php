<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ContactController
{
    public function store(Request $request, Response $response): Response
    {
        return $response
            ->withHeader('Location', '/#contact')
            ->withStatus(303);
    }
}
