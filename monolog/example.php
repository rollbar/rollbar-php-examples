<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;
use Monolog\Handler\PsrHandler;
use Monolog\Logger;

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local'
);

Rollbar::init($config);

$logger = new Logger('ExampleMonologLogger');
$logger->pushHandler(new PsrHandler(Rollbar::logger()));