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

    <!-- JavaScript Bundle with Popper.js -->
    <script src="bootstrap-5.0.0-alpha2-dist/js/bootstrap.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>

</html>