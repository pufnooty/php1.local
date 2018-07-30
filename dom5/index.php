<?php
if (session_id() == '') {
    session_start();
}
?>
<html>
<head>
    <title>Домашняя работа 5</title>
</head>
<body>
<h1>Домашняя работа 5</h1>
<p>Задание 1. Для начала создайте несколько полезных функций и выделите их в отдельный файл:</p>
<ol>
    <li>Функция getUsersList() пусть возвращает массив всех пользователей и хэшей их паролей</li>
    <li>Функция existsUser($login) проверяет - существует ли пользователь с заданным логином?</li>
    <li>Функция сheckPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверк</li>
</ol>

<?php

include __DIR__.'/functions.php';

?>
<hr>
<p>Задание 2. Добавьте функцию getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null </p>

<hr>
<p>Задание 3. Добавьте к проекту страничку login.php, которая:
<ol>
    <li>ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу</li>
    <li>ЕСЛИ пользователь не вошел - отображает форму входа</li>
    <li>ЕСЛИ введены данные в форму входа - проверяем им (см. пункт 1.3) и ЕСЛИ проверка прошла, ТО запоминаем информацию о вошедшем пользователе</li>
</ol>
<?php
If (isset($_SESSION['CurrentUserName'])){?>

    <h2>Текущий пользователь: <?php echo $_SES;SION['CurrentUserName'];?></h2>

    <?php
} else {
    ?>
    <p><a href="/dom5/login.php">Перейти на страницу авторизации - login.php</a></p>
<?php
}
?>

<hr>
<p>Задание 4. Модифицируйте ваш проект: позволяйте загружать изображения в галерею только авторизованным пользователям,
    ведите лог (запись в файл) с данными: кто, когда и какое изображение загрузил</p>

<h2>
ФОТОГАЛЕРЕЯ
</h2>

<?php
$galleryfiles = scandir(__DIR__.'/gallery');
$galleryfiles = array_diff($galleryfiles,['.','..']);
foreach ($galleryfiles as $index => $file) {
    ?>
    <a href="/dom5/gallery/<?php echo $file; ?>"><img src="/dom5/gallery/<?php echo $file; ?>" height="200"></a>
<?php }
?>
<p> Загрузка изображения: </p>
<form action="/dom5/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="nextimage">
    <button type="submit">Загрузить...</button>
</form>