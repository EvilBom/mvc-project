<?php

/**
 * Конфигурационный файл приложения
 */

use Bom\Core\Components\Database\DbFactory;
use Bom\Core\Components\Logger\LoggerFactory;
use Bom\Core\Components\Router\RouterFactory;

return [
    // Массив конфигураций сервисов
    'components' => [
        'router' => [
            'factory' => RouterFactory::class,
        ],
        'logger' => [
            'factory' => LoggerFactory::class,
            'params' => [
                'logFile' => $_SERVER['DOCUMENT_ROOT'] . '/../storage/logs/log.txt',
            ],
        ],
        'db' => [
            'factory' => DbFactory::class,
            'params' => [
                'dsn' => 'test',
                'user' => 'root',
                'password' => 'hello'
            ]
        ]
    ],
    // ...
    // Здесь могут содержаться другие настройки приложения, кроме сервисов
];