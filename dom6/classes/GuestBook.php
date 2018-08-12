<?php

require __DIR__. '/TextFile.php';

class GuestBook extends TextFile
{
    public function getData()
    {
        return $this->gb_array;
    }

    public function append($text)
    {
        $this->gb_array[] = $text;
    }
}
