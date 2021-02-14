<?php

namespace App;

use App\View\Renderable;
use App\Exception\HttpException;

class Application
{
    public $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function run()
    {
        try {
            $dispatch = $this->router->dispatch();
            if ($dispatch instanceof Renderable) {
                echo $dispatch->render();
            } else {
                echo $dispatch;
            }
        } catch (HttpException $e) {
            $this->renderException($e);
        }
    }

    public function renderException($exception)
    {
        if ($exception instanceof Renderable) {
            echo $exception->render();
        } else {
            $code = $exception->getCode() == 0?$code = 500:$exception->getCode();
            http_response_code($code);
            echo $exception->getMessage();
        }
    }
}