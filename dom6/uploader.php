<?php

//3. Создайте класс Uploader в соответствии с требованиями:
class Uploader
{

    public $fieldename;

//3.1.В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($name)
    {
        $this->$fieldename = $name;
    }

    /*public checkTypes($types)
    {

    }*/
//3.2.Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded()
    {
        if (isset($_FILES[$this->$fieldename])) {
            if (('image/jpeg' == $_FILES[$this->$fieldename]['type']) || ('image/png' == $_FILES[$this->$fieldename]['type'])){
                If (0 == $_FILES[$this->$fieldename]['error']) {
                    return true;
                }
            }
        }
        return false;
    }
//3.3.Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function upload()
    {
        If (isUploaded()){
            move_uploaded_file($_FILES[$this->$fieldename]['tmp_name'],
                __DIR__ . '/gallery/' .$_FILES[$this->$fieldename]['name']);
        }
    }
}
