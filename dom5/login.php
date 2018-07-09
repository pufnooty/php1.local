<?php

include (__DIR__.'/functions.php');

If (null != getCurrentUser()){
    //ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
    header('Location: /dom5/index.php');
    exit;
}else{
    //ЕСЛИ пользователь не вошел - отображает форму входа
?>
    <form action = "/dom5/index.php" method="post">
        Логин: <input type="text" name="login">
        пароль: <input type="password" name="password">
        <button type="submit">Войти...</button>
    </form>
<?php
}