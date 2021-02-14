<?php

namespace App\Exception;

use App\Exception\HttpException;
use App\View\Renderable;

class NotFoundException extends HttpException implements Renderable
{
    public function render()
    {
        return "Проверьте правельность запрашиваемого пути!";
    }
}