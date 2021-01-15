<?php

namespace Bom\Core\Components\Logger;


interface WriterInterface
{
    public function write($message);
}