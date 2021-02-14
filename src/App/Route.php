<?php

namespace App;

class Route
{
    private $method;
    private $path;
    private $callback;

    public function __construct($method, $uri, $callback)
    {
        $this->method = $method;
        $this->path = $uri;
        $this->callback = $this->prepareCallback($callback);
    }

    private function prepareCallback($callback)
    {
        if (is_callable($callback)) {
            return $callback;
        } elseif (is_string($callback)) {
            $controller = explode("@", $callback);
            $validController = new $controller[0]();
            $functionName = $controller[1];
            return [$validController, $functionName];
        }
        throw new \ValueError('Callback is not callable');
    }

    public function getPath()
    {
        return $this->path;
    }

    public function match($method, $uri)
    {
        if (strtolower($this->method) != strtolower($method)) {
            return false;
        }

        if (!preg_match($this->getReg(), $uri)) {
            return false;
        }

        return true;
    }

    private function getReg()
    {
        return '/^' . str_replace(['*', '/'], ['(\w+)', '\/'], $this->getPath()) . '$/';
    }

    public function run($uri)
    {
        preg_match($this->getReg(), $uri, $params);
        unset($params[0]);
        return call_user_func_array($this->callback, $params);
    }
}