<?php

if (session_id() == '') {
    session_start();
}

include (__DIR__.'/functions.php');

If (isset($_POST['login'],$_POST['password'])){

    $login = $_POST['login'];

    If (checkPassword($login,$_POST['password'])){

        $_SESSION['CurrentUserName'] = $login;
    }else{

        $_SESSION['CurrentUserName'] = null;
        echo 'Неверный пароль или имя пользователя';
    }
}

If (null != getCurrentUser()){
    //ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
    header('Location: /dom5/index.php');
    exit;
}else{
    //ЕСЛИ пользователь не вошел - отображает форму входа
    ?>
    <form action = "/dom5/login.php" method="post">
        Логин: <input type="text" name="login">
        пароль: <input type="password" name="password">
        <button type="submit">Войти</button>
    </form>
    <?php
}
