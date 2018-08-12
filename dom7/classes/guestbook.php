<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $gb_array;
    protected $txt_filename;

    public function __construct($filename)
    {

        $text_lines = file($filename,FILE_IGNORE_NEW_LINES);
        foreach ($text_lines as $line){
            $this->gb_array[] = new GuestBookRecord($line);
        }

        $this->txt_filename = $filename;
    }

    public function save()
    {
        $fh =  fopen(__DIR__.$this->txt_filename , 'w');
        foreach ($this->gb_array as $gb_row) {

            fwrite($fh, $gb_row->getMessage() . "\n");
        }
    }

    public function getData()
    {
        return $this->gb_array;
    }

    public function append($text)
    {
        $this->gb_array[] = $text;
    }
}