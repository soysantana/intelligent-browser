<?php
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('php://stdout', Logger::WARNING));

// Add records to the log
$log->warning('Foo');
$log->error('Bar');

echo "Composer is installed and working!";