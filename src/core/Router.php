<?php

class Router
{

    protected array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file): Router
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function get(string $uri, string $controller): void
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post(string $uri, string $controller): void
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route found.');
    }
}