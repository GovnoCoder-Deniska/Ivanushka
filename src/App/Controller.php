<?php

namespace App;

use App\View\View;

class Controller
{
    public function index()
    {
        $data = [
          'title' => 'Заголовок страницы',
        ];
        return new View('index', $data);
    }

    public function manga()
    {
        $data = [
          'title' => 'Здесь должа быть манга!',
        ];
        return new View('manga', $data);
    }

    public function contacts()
    {
        $data = [
          'title' => 'Засекречено',
        ];
        return new View('contacts', $data);
    }
}