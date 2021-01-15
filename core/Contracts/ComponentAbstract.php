<?php

namespace Bom\Core\Contracts;


/**
 * Class ComponentAbstract
 * Абстракный класс, который должны наследовать все севрисы
 *
 * @package Aigletter\Core\Contracts
 */
abstract class ComponentAbstract implements BootstrapInterface, ComponentInterface
{
    /**
     * Метод по умолчанию ничего не делает.
     * Будет переопределяться наследниками, кому это будет нужно
     */
    public function bootstrap()
    {

    }
}
