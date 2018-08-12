<?php

require (__DIR__. '/classes/GuestBook.php');

$guestbook = new GuestBook(__DIR__.'/guestbook.txt');

$gb_array = $guestbook->getData();

foreach ($gb_array as $gb_record) { ?>

    <i><?php echo $gb_record; ?></i><br>
    <?php
}

$guestbook->append('Тестовая запись книги. Автор: сосискин');

$guestbook->save();