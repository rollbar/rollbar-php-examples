<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local',
    /**
     * 4. Set up Rollbar with your `CustomTransformer` class in `example.php`.
     */
    'transformer' => "\ExampleVendor\CustomTransformer"
);

Rollbar::init($config);

$response = Rollbar::log(
    Level::INFO,
    'test'
);