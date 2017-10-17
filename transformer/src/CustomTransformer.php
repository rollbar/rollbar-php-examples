<?php

namespace ExampleVendor;

use Rollbar\TransformerInterface;
use Rollbar\Payload\Level;
use Rollbar\Payload\Payload;

/**
 * 2. Create your transformer class in `src/CustomTransformer.php` which 
 * implements `TransformerInterface`.
 */
class CustomTransformer implements TransformerInterface
{
    
    /**
     * 3. Implement `transform` method in your `CustomTransformer` with desired 
     * business logic. Make sure you return the $payload object from this method.
     * 
     * @param Payload $payload
     * @param Level $level
     * @param \Exception | \Throwable $toLog
     * @param $context
     * @return Payload
     */
    public function transform(Payload $payload, $level, $toLog, $context)
    {
        /**
         * You have full access to the $payload object here
         */
        $custom = $payload->getData()->getCustom();
        
        /**
         * Here we add C9_ environment variables to our payloads which is the
         * business logic of our example app.
         */
        $c9envs = array(
            'C9_FULLNAME',
            'C9_PORT',
            'C9_UID',
            'C9_IP',
            'C9_USER',
            'C9_SH_EXECUTED',
            'C9_PID',
            'C9_PROJECT',
            'C9_EMAIL',
            'C9_EXAMPLE_VAR'
        );
        
        $custom['c9_env'] = array();
        
        foreach ($c9envs as $varName) {
            $custom['c9_env'][$varName] = getenv($varName); 
        }
        
        $payload->getData()->setCustom($custom);
        
        /**
         * Make sure you return the $payload object.
         */
        return $payload;
        
    }
    
}
