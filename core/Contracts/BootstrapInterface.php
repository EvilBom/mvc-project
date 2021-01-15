<?php

namespace Bom\Core\Contracts;


/**
 * Interface BootstrapInterface
 * Интерфейс нужен для того, чтобы производить какую-то начальную загрузку.
 *
 * @package Aigletter\Core\Contracts
 */
interface BootstrapInterface
{
    public function bootstrap();
}
