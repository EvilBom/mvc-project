<?php


namespace Bom\Core\Components\Logger;


class DbWriter implements WriterInterface
{

    public function write($message)
    {
        // Implementation
        echo $message;
    }
}
