<?php

namespace App\Http;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Psr\Http\Message\ResponseInterface as Response;

abstract class Controller
{
    public function __construct(protected ViewFactory $view)
    {
    }

    protected function render(Response $response, string $template, array $data = []): Response
    {
        $response->getBody()->write($this->view->make($template, $data)->render());

        return $response;
    }
}
