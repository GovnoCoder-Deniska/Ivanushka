<?php

namespace App\View;

class View implements Renderable
{
    public $data;
    public $template;

    public function __construct($template, $data)
    {
        $this->data = $data;
        $this->template = $template;
    }

    public function render()
    {
        extract($this->data);
        $templateFile = str_replace(".", "\\", $this->template) . ".php";
        include $_SERVER["DOCUMENT_ROOT"] . "/logout/" . $templateFile;
    }
}