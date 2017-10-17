<?php

namespace ExampleVendor;

use Rollbar\TransformerInterface;
use Rollbar\Payload\Level;
use Rollbar\Payload\Payload;

class CustomTransformer implements TransformerInterface
{
    
    /**
     * @param Payload $payload
     * @param Level $level
     * @param \Exception | \Throwable $toLog
     * @param $context
     * @return Payload
     */
    public function transform(Payload $payload, $level, $toLog, $context)
    {
        $custom = $payload->getData()->getCustom();
        
        $c9envs = array(
            'C9_FULLNAME',
            'C9_PORT',
            'C9_UID',
            'C9_IP',
            'C9_USER',
            'C9_SH_EXECUTED',
            'C9_PID',
            'C9_PROJECT',
            'C9_EMAIL'
        );
        
        $custom['c9_env'] = array();
        
        foreach ($c9envs as $varName) {
            $custom['c9_env'][$varName] = getenv($varName); 
        }
        
        $payload->getData()->setCustom($custom);
        
        return $payload;
        
    }
    
}
