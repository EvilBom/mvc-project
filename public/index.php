<?php

/**
 * Единая точка входа, куда сервер перенаправляет все запросы
 */

use Bom\Core\Application;
use Bom\Core\Components\Database\QueryBuilder;

// Включаем вывод ошибок, испольуется при разработке
ini_set('display_errors', '1');

// Подключаем автолоудер
require_once '../vendor/autoload.php';

// Получаем массив конфигураций приложения
$config = include '../config/main.php';

$queryBuilder = new  Querybuilder;

echo $queryBuilder->table('users')
    ->select(['first_name', 'age'])
    ->where(['status' => 'active'])
    ->order(['id' => 'ASC'])
    ->limit(20)
    ->offset(40)
    ->build();

die();

// Создаем экземпляр приложения и запускаем выполение
$app = Application::getInstance($config);
$app->run();


