<?php

include (__DIR__.'/functions.php');

If (isset($_POST['login'],$_POST['password'])){
    $login = $_POST['login'];
    If (checkPassword($login,$_POST['password'])){

        //session_start();
        $_SESSION['CurrentUserName'] = $login;
        //header('Location: /dom5/index.php');
        //exit;
    }else{
        echo 'Неверный пароль или имя пользователя';
        $_SESSION['CurrentUserName'] = null;
    }
}

If (null != getCurrentUser()){
    //ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
    header('Location: /dom5/index.php');
    exit;
}else{
    var_dump(getCurrentUser());
    //ЕСЛИ пользователь не вошел - отображает форму входа
?>
    <form action = "/dom5/login.php" method="post">
        Логин: <input type="text" name="login">
        пароль: <input type="password" name="password">
        <button type="submit">Войти...</button>
    </form>
<?php
}

