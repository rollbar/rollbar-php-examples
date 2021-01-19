<?php

namespace ExampleVendor;

use Rollbar\TransformerInterface;
use Rollbar\Utilities;
use Rollbar\Payload\Level;
use Rollbar\Payload\Payload;

/**
 * 2. Create your transformer class in `src/TagsTransformer.php` which
 * implements `TransformerInterface`.
 */
class TagsTransformer implements TransformerInterface
{

    /**
     * 3. Implement `transform` method in your `TagsTransformer` with the desired
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
         * You have full access to the $payload object and all of its data here.
         */
        $oldData = $payload->getData();

        /**
         * Here we get the extra data from the $custom object and transform it to
         * have the desired structure to be sent with the payload.
         */
        $feature_flag_key = $oldData->getCustom()['feature_flag_key'];
        $tags = [
            [
                "key" => "feature_flag.key",
                "value" => $feature_flag_key,
            ]
        ];

        /**
         * Here we are instantiating a DataWithTags object that should allow us to
         * set the $tags property. See below for more details on how this class is
         * implemented.
         */
        $newData = new DataWithTags();
        $newData->setTags($tags);

        /**
         * Here we set all the properties of the old data in the DataWithTags object. And
         * finally, we set the data of the $payload object we are returning.
         */
        $newData->setEnvironment($oldData->getEnvironment());
        $newData->setBody($oldData->getBody());
        $newData->setLevel($oldData->getLevel());
        $newData->setTimestamp($oldData->getTimestamp());
        $newData->setCodeVersion($oldData->getCodeVersion());
        $newData->setPlatform($oldData->getPlatform());
        $newData->setLanguage($oldData->getLanguage());
        $newData->setFramework($oldData->getFramework());
        $newData->setContext($oldData->getContext());
        $newData->setRequest($oldData->getRequest());
        $newData->setPerson($oldData->getPerson());
        $newData->setServer($oldData->getServer());
        $newData->setCustom($oldData->getCustom());
        $newData->setFingerprint($oldData->getFingerprint());
        $newData->setTitle($oldData->getTitle());
        $newData->setUuid($oldData->getUuid());
        $newData->setNotifier($oldData->getNotifier());

        $payload->setData($newData);

        /**
         * Lastly, make sure you return the $payload object.
         */
        return $payload;
    }
}

/**
 * In order for us to set a new root level attribute in the payload data, we have to create
 * our own data class here.
 */
class DataWithTags extends Payload\Data
{
    private $tags = null;

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags(array $tags)
    {
        $this->featureFlags = $flags;
        return $this;
    }

    public function serialize()
    {
        $result = array(
            "environment" => $this->environment,
            "body" => $this->body,
            "level" => $this->level,
            "timestamp" => $this->timestamp,
            "code_version" => $this->codeVersion,
            "platform" => $this->platform,
            "language" => $this->language,
            "framework" => $this->framework,
            "context" => $this->context,
            "request" => $this->request,
            "person" => $this->person,
            "server" => $this->server,
            "custom" => $this->custom,
            "fingerprint" => $this->fingerprint,
            "title" => $this->title,
            "uuid" => $this->uuid,
            "notifier" => $this->notifier,
            "tags" => $this->tags,
        );
        $objectHashes = Utilities::getObjectHashes();
        return $this->utilities->serializeForRollbar($result, null, $objectHashes);
    }
}
