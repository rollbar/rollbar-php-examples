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

function frame1($param1)
{
    frame2(array(
        'password' => 'to-scrub'
    ));
}

function frame2($param1)
{
    throw new \Exception('test1');
}

frame1('argument1 for frame 1');