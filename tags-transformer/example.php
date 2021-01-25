<?php

require_once "vendor/autoload.php";
require_once "config/secret.php";

use Rollbar\Rollbar;
use Rollbar\Payload\Level;

$config = array(
    'access_token' => $_SECRET['access_token'],
    'environment' => 'local',
    /**
     * 4. Set up Rollbar with your `TagsTransformer` class in `example.php`.
     */
    'transformer' => "\ExampleVendor\TagsTransformer"
);

Rollbar::init($config);

$response = Rollbar::log(
    Level::INFO,
    'test',
    /**
     * Send the launchdarkly information as extra data in the log call. The
     * key `feature_flag_key` here should match that of your transformer.
     */
    array('feature_flag_key' => 'YOUR_FEATURE_FLAG'),
);
