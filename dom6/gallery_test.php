<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p> Загрузка изображения: </p>
<form action="/dom6/gallery_test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="nextimage">
    <button type="submit">Загрузить...</button>
</form>

<?php

require (__DIR__ . '/classes/uploader.php');

$uploadedpicture = new Uploader( 'nextimage');

$uploadedpicture->upload();

?>
</body>
</html>