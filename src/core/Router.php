<?php

class Router
{

    protected array $routes;

    public static function load($file): Router
    {
        $router = new static();

        $router->register(require $file);

        return $router;
    }

    public function register(array $routes): void
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route found.');
    }
}