<?php

namespace App;

class Config
{
    private $configs;
    private static $instance;

    public function get($config)
    {
        return array_get($this->configs, 'array.' . $config);
    }

    private function __construct()
    {
        $arrayDbInformation = include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
        $this->configs = ['array' => $arrayDbInformation];
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}