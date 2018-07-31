<?php

//3. Создайте класс Uploader в соответствии с требованиями:
class Uploader
{
    public $fieldename;

//3.1.В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($name)
    {
        $this->fieldename = $name;
    }

 //3.2. Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded()
    {
        if (isset($_FILES[$this->fieldename])) {
            if (0 == $_FILES[$this->fieldename]['error']) {
                    return true;
            }
        }
        return false;
    }
//3.3. Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->fieldename]['tmp_name'],
                __DIR__ . '/files/' .$_FILES[$this->fieldename]['name']);
        } else {
            echo 'Файл не был загружен!';
        }
    }
}
