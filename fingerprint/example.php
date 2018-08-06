<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local'
);

Rollbar::init($config);

// Rollbar::log(Level::INFO, "Something went wrong", array('fingerprint' => 'foobar'));
// Rollbar::log(Level::INFO, "Something went wrong", array('fingerprint' => 'foobar3'));
Rollbar::log(Level::INFO, "Something went wrong", array('fingerprint' => 'completelydifferent2'));