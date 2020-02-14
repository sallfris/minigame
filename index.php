<?php
/**
 * Created by PhpStorm.
 * User: Glazkov M.O.
 * Date: 14.02.2020
 * Time: 14:36
 */
$curDir = __DIR__;
$images = [];
$acceptFiles = scandir($curDir . '/accept');
foreach ($acceptFiles as $file) {
    $fileName = basename($file);
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $images[] = [
        'img' => '/game/accept/' . $fileName,
        'class' => 'accept',
    ];
}
$wrongFiles = scandir($curDir . '/wrong');
foreach ($wrongFiles as $file) {
    $fileName = basename($file);
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $images[] = [
        'img' => '/game/wrong/' . $fileName,
        'class' => 'wrong',
    ];
}
shuffle($images);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/game/assets/main.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Уберите не правильные знаки ПДД.</h1>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($images as $image):
            ?>
            <div class="image col-4 col-md-3 col-lg-2 col-xl-1 <?= $image['class'] ?> mb-3">
                <img class="img-thumbnail" src="<?= $image['img'] ?>" alt="">
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="/game/assets/main.js"></script>
</body>
</html>
