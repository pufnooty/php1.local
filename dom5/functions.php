<?php
/*
Функция getUsersList() пусть возвращает массив всех пользователей и хэшей их паролей
  */

function getUsersList() {

$users = [
    'user1' => '$2y$10$A2d8VV933kEy/XVJ19nfQO9uaJtTBtEVkiy8ATYN459Mg7IlMX9Hi',
    'Ivan' => '$2y$10$DAyyeTSTa1qWq6a/N5OTp.1YH7NxkD0vzuUELMNgjv6GAF9cs1f/S',
    'totoro' => '$2y$10$0Bm0QxVCofqQt6ppnVbq3.iL8SFgBs2GBEFdrAMIwZ3YnRXuTCe/i'
];

return $users;

}

/*Функция existsUser($login) проверяет - существует ли пользователь с заданным логином?
 */
function existsUser($login) {

    return array_key_exists($login,getUsersList());
}

assert (existsUser('totoro'));

/*Функция сheckPassword($login, $password) пусть возвращает true тогда,
когда существует пользователь с указанным логином и введенный им пароль прошел проверки
*/

function checkPassword($login, $password) {

    $usersarray = getUsersList();

    If (existsUser($login)){
        return password_verify($password,$usersarray[$login]);
    } else{
        return false;
    }
}

/*Задание 2. Добавьте функцию getCurrentUser()
которая возвращает либо имя вошедшего на сайт пользователя, либо null */

function getCurrentUser(){
    session_start();

    If (isset($_SESSION['CurrentUserName'])){
    return $_SESSION['CurrentUserName'];
    }
    return null;
}