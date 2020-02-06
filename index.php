<?php
// Включаем режим строгой типизации
declare(strict_types=1);

// Подключаем файл реализующий автозагрузку
require_once __DIR__ . '/System/autoload.php';
require_once __DIR__ . '/config.php'; //database config

// Запускаем приложение
System\Router::run();
