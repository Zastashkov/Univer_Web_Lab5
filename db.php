<?php 


    /*define('DB_HOST', 'lab5.std-2101.ist.mospolytech.ru'); //Адрес
    define('DB_USER', 'std'); //Имя пользователя
    define('DB_PASSWORD', 'weblab55'); //Пароль
    define('DB_NAME', 'weblab5'); //Имя БД*/

    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'root'); //Имя пользователя
    define('DB_PASSWORD', '00000000'); //Пароль
    define('DB_NAME', 'schema_local'); //Имя БД

    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysql->connect_errno) exit('Ошибка подключения к БД');
    $mysql -> set_charset('utf8');

    /*$mysql -> close();*/
?>
