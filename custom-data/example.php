<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;
use ExampleVendor\ExampleDataObject;

$exampleDataObject = new ExampleDataObject();

/**
 * 3. Set up data in a `ExampleDataObject` instance in `example.php`.
 */
$exampleDataObject->foo = "bar";

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local',
    /**
     * 4. Save a reference to the `ExampleDataObject` instance in 
     * RollbarLogger's custom data.
     */
    'custom' => array(
        'exampleDataObject' => $exampleDataObject
    )
);

Rollbar::init($config);

$response = Rollbar::log(
    Level::INFO,
    'This message should have $exampleDataObject\'s data attached.'
);