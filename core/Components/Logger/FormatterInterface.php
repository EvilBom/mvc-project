<?php


namespace Bom\Core\Components\Logger;


interface FormatterInterface
{
    public function format($level, $message, $context = []);
}