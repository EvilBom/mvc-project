<?php

namespace Bom\Core\Components\Logger;


class FileWriter implements WriterInterface
{
    protected $logFile;

    public function __construct($logFile)
    {
        $this->logFile = $logFile;
    }

    public function write($message)
    {
        file_put_contents($this->logFile, $message . "\n", FILE_APPEND);
    }
}
