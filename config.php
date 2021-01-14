<?php
require_once "idiorm.php";

//Импорт смарту шаблонизатора
require_once __DIR__ . '/libs/Smarty.class.php';

$hostName = 'localhost'; // адрес сервера 
$dataBaseName = 'testabr'; // имя базы данных
$userName = 'root'; // имя пользователя
$password = 'root'; // пароль

ORM::configure(array(
    'connection_string' => "mysql:host=$hostName;dbname=$dataBaseName",
    'username' => "$userName",
    'password' => "$password",
));

try {
    $checkСonnectionsToDataBase = ORM::for_table('medals');
} catch (PDOException $e) {
    echo "Ошибка при подключении : " . $e->getMessage();
    echo "Код ошибки : " . $e->getCode();
    die();
};
