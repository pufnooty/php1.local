<?php
//базовый (родительский) класс TextFile
class TextFile
{
    protected $gb_array;
    protected $txt_filename;

    public function __construct($filename)
    {
        $this->gb_array = file(__DIR__. $filename,FILE_IGNORE_NEW_LINES);
        $this->txt_filename = $filename;
    }

    public function save()
    {
        $fh =  fopen(__DIR__.$this->txt_filename , 'w');
        foreach ($this->gb_array as $gb_row) {

            fwrite($fh, $gb_row . "\n");

        }
    }
}

//1.Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
class GuestBook extends TextFile
{

    //1.2.Метод getData() возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->gb_array;
    }

    //1.3.Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
        $this->gb_array[] = $text;
    }

}