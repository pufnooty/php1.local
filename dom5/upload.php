<?php
//echo $_FILES['nextimage']['type'];
include (__DIR__.'/functions.php');
If (null != getCurrentUser()){

    if (isset($_FILES['nextimage'])) {

        If (('image/jpeg' == $_FILES['nextimage']['type']) || ('image/png' == $_FILES['nextimage']['type'])){


            If (0 == $_FILES['nextimage']['error']) {

                move_uploaded_file($_FILES['nextimage']['tmp_name'], __DIR__ . '/gallery/' .$_FILES['nextimage']['name']);
            }
        }
        else{
            echo 'Файл не является изображением!';
        }
    }
?>
Изображение успешно выгружено! <a href="/dom5/index.php">назад</a>
<?php

exit;
}else{
    ?>
    Пользователь не авторизован! <a href="/dom5/login.php">Перейти на страницу авторизации - login.php</a>
    <?php
}