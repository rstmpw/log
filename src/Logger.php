<?php
namespace rstmpw\log;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class Logger extends AbstractLogger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = [])
    {
        echo date('Y-m-d H:i:S')." $level $message\n";
    }
}