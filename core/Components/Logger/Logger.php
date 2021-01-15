<?php


namespace Bom\Core\Components\Logger;


use Bom\Core\Contracts\ComponentInterface;
use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger implements ComponentInterface
{
    /**
     * @var WriterInterface Обьект, который умеет писать логи в определенное хранилище
     */
    protected $writer;

    /**
     * @var FormatterInterface Обьект, который умеет определенным образом форматировать логи
     */
    protected $formatter;

    public function __construct(WriterInterface $writer, FormatterInterface $formatter)
    {
        $this->writer = $writer;
        $this->formatter = $formatter;
    }

    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     */
    public function log($level, $message, array $context = array())
    {
        // Сначала форматируем
        $message = $this->formatter->format($level, $message, $context);
        // Потом записываем
        $this->writer->write($message);
    }
}