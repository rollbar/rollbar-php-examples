<?php

namespace ExampleVendor;

use Rollbar\TransformerInterface;
use Rollbar\Payload\Level;
use Rollbar\Payload\Payload;

/**
 * 2. Create the `ExampleDataObject` class to be stored as custom data.
 */
class ExampleDataObject
{
    public $foo;
}
