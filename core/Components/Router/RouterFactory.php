<?php

namespace Bom\Core\Components\Router;


use Bom\Core\Components\Router\Router;
use Bom\Core\Contracts\ComponentAbstract;
use Bom\Core\Contracts\ComponentFactoryAbstract;

/**
 * Class RouterFactory
 * Фабрика, умеющая создавать экземпляр роутера
 * Паттерн Factory Method
 *
 * @package Aigletter\Core\Components\Router
 */
class RouterFactory extends ComponentFactoryAbstract
{
    /**
     * Фабричный метод для создания экземпляра конкретного сервиса
     * @return ComponentAbstract
     */
    protected function createConcreteInstance($params = []): ComponentAbstract
    {
        return new Router();
    }
}