<?php

require __DIR__. '/classes/guestbook.php';

$guestbook = new GuestBook(__DIR__. '/guestbook.txt');

$gb_array = $guestbook->getData();

require __DIR__. '/classes/view.php';

$view = new view();

$i=0;

foreach ($gb_array as $gb_record){
    $view->assign($i,$gb_record);
    $i++;
}

$view->display(__DIR__.'/templates/index.php');
