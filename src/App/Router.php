<?php

namespace App;

use App\Exception\NotFoundException;

class Router
{
    private $routes = [];

    public function get($link, $callback)
    {
        $this->routes[$link][] = new Route('get', $link, $callback);
    }

    public function dispatch()
    {
        foreach ($this->routes as $link => $routes) {
            foreach ($routes as $route) {
                if ($route->match($_SERVER['REQUEST_METHOD'], $_SERVER["REQUEST_URI"])) {
                    return $route->run($_SERVER["REQUEST_URI"]);
                }
            }
        }
        throw new NotFoundException("Страница не найдена!", 404);
    }
}

