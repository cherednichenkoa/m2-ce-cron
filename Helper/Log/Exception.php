<?php

namespace MageMojo\Cron\Helper\Log;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger as MonologLogger;

/**
 * Class Exception
 * @package MageMojo\Cron\Helper\Log
 */
class Exception  extends Base
{
    protected $fileName = '/var/log/mojo_cron/exception.log';
    protected $loggerType = MonologLogger::ERROR;
}