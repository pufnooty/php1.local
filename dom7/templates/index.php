<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>
<p>
    <?php

    foreach ($this->data as $gb_record) { ?>

        <i><?php

            echo $gb_record; ?></i><br>
        <?php
    }
    ?>
</p>

</body>
</html>