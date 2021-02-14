<?php
$main = [
  [
    "name" => "Новинки",
    "href" => "/"
  ],

  [
    "name" => "Книжки",
    "href" => "/books"
  ],

  [
    "name" => "Манга",
    "href" => "/manga"
  ],

  [
    "name" => "Контакты",
    "href" => "/contacts"
  ]
];
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-5.0.0-alpha2-dist/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid bg-success">
        <nav class="navbar">
            <span class="navbar-brand text-light">Книги.net</span>
            <ul class="nav w-25 justify-content-between">
                <?php
                foreach ($main as $index) : ?>
                <li class="nav-item"><a class="nav-link btn-outline-light <?= ($index["href"] == $_SERVER['REQUEST_URI'])?"btn":""  ?>" href="<?= $index["href"] ?>"><?= $index["name"] ?></a></li>
                <?php
                endforeach;?>
            </ul>
        </nav>
    </div>