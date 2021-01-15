<?php

namespace Bom\Core\Components\Logger;


class TextFormatter implements FormatterInterface
{
    /**
     * Форматирует каким-то образом сообщение
     *
     * @param $level
     * @param $message
     * @param array $context
     * @return string
     */
    public function format($level, $message, $context = [])
    {
        $output = '[' . date('Y-m-d H:i:s') . ']' . $level . ': ' . $message . ': ' . json_encode($context);

        return $output;
    }
}