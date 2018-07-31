<html>
<head>
    <title>Домашняя работа 6</title>
</head>
<body>
<h1>Домашняя работа 6</h1>
<p>
<?php

require (__DIR__. '/guestbook.php');

$guestbook = new GuestBook('/guestbook.txt');

$gb_array = $guestbook->getData();

foreach ($gb_array as $gb_record) { ?>

    <i><?php echo $gb_record; ?></i><br>
    <?php
}
$guestbook->append('Тестовая запись книги. Автор: сосискин');
$guestbook->save();
?>
</p>

<hr>
<p> Загрузка изображения: </p>
<form action="/dom6/index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="nextimage">
    <button type="submit">Загрузить...</button>
</form>

<?php

require (__DIR__. '/uploader.php');

$uploadedpicture = new Uploader( 'nextimage');
$uploadedpicture->upload();
?>

</body>
</html>