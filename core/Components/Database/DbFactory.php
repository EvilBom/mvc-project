<?php


namespace Bom\Core\Components\Database;


use Bom\Core\Contracts\ComponentAbstract;
use Bom\Core\Contracts\ComponentFactoryAbstract;
use Bom\Core\Contracts\ComponentInterface;

class DbFactory extends ComponentFactoryAbstract
{

    protected function createConcreteInstance($params = []): ComponentInterface
    {
        if (empty($params['dsn']) || empty($params['user']) || empty($params['password'])) {
            throw new \Exception('Params dsn, user and password are required');
        }

        return new Db($params['dsn'], $params['user'], $params['password']);
    }
}