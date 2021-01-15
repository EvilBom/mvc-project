<?php


namespace Bom\Core\Contracts;


/**
 * Class ComponentFactoryAbstract
 * Абстрактный класс всех фабрик, умеющих создвать экземпляры сервисов.
 * Все сервисы должны создаваться с помощью фабрик
 * Каждая конкретаная фабрика сервиса должна реализовать метод createConcreteInstance
 * Паттерн Factory method
 *
 * @package Aigletter\Core\Contracts
 */
abstract class ComponentFactoryAbstract
{
    /**
     * Публичный метод, который будет использоваться для создания экземпляра сервиса
     * @return ComponentAbstract
     */
    public function createInstance($params = []): ComponentInterface
    {
        return $this->createConcreteInstance($params);
    }

    /**
     * Фабричный метод, для создания конкретных экземпляров сервисов
     * @return ComponentAbstract
     */
    protected abstract function createConcreteInstance($params = []): ComponentInterface;
}