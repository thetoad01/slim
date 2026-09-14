<?php

namespace App;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

class View
{
    public static function create(string $viewPath, string $cachePath): Factory
    {
        $filesystem = new Filesystem();
        $container = Container::getInstance();

        $compiler = new BladeCompiler($filesystem, $cachePath);

        $resolver = new EngineResolver();

        $resolver->register('blade', function () use ($compiler) {
            return new CompilerEngine($compiler);
        });

        $factory = new Factory(
            $resolver,
            new FileViewFinder($filesystem, [$viewPath]),
            new Dispatcher()
        );

        $factory->setContainer($container);
        $container->instance('view', $factory);
        $container->instance(ViewFactory::class, $factory);
        $container->instance(Application::class, new class {
            public function getNamespace(): string
            {
                return 'App\\';
            }
        });

        return $factory;
    }
}
