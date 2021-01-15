<?php



namespace Bom\Core\Components\Logger;


use Bom\Core\Contracts\ComponentAbstract;
use Bom\Core\Contracts\ComponentFactoryAbstract;
use Bom\Core\Contracts\ComponentInterface;

class LoggerFactory extends ComponentFactoryAbstract
{
    /**
     * Создает экземпляр логера
     *
     * @param array $params
     * @return ComponentInterface
     */
    protected function createConcreteInstance($params = []): ComponentInterface
    {
        $writer = new FileWriter($_SERVER['DOCUMENT_ROOT'] . '/../storage/logs/log.txt');
        $formatter = new TextFormatter();
        return new Logger($writer, $formatter);
    }
}