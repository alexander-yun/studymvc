<?php


namespace Models;


class Db
{
    public static function connectDB(){
        // Строка соединения с базой данных
        $dsn = 'mysql:host='. DB_HOST .';dbname='.DB_SCHEMA.';';
        // Создаем экземпляр класса для работы с БД
        return (new \PDO($dsn, DB_USER, DB_PASS));
    }
}