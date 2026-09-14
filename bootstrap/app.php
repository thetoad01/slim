<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipbuildController;
use App\View;
use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\Factory;
use Slim\Factory\AppFactory;

$root = dirname(__DIR__);
$container = Container::getInstance();

$view = View::create($root . '/resources/views', $root . '/storage/framework/views');
$container->instance(Factory::class, $view);
$container->instance(ViewFactory::class, $view);

$container->bind(HomeController::class);
$container->bind(ContactController::class);
$container->bind(ShipbuildController::class);
$container->bind(HistoryController::class);

AppFactory::setContainer($container);

$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

require $root . '/routes/web.php';

return $app;
