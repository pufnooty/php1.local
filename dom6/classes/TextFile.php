<?php

class TextFile
{
    protected $gb_array;
    protected $txt_filename;

    public function __construct($filename)
    {

        $this->gb_array = file($filename,FILE_IGNORE_NEW_LINES);
        $this->txt_filename = $filename;

    }

    public function save()
    {
        $final_array = implode("\n",$this->gb_array);
        return file_put_contents($this->txt_filename, $final_array);

    }
}