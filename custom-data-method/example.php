<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;
use ExampleVendor\ExampleDataObject;

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local',
    'custom_data_method' => function($toLog, $context) {
        
        return array(
            'random_number' => rand(0,1000),
            'controller_name' => $context['controller_name']
        );
           
    }
);

Rollbar::init($config);

$response = Rollbar::log(
    Level::INFO,
    'This message should the resutl of custom_data_method attached to custom.',
    array(
        'custom_data_method_context' => array(
            'controller_name' => 'NoController'
        )
    )
);