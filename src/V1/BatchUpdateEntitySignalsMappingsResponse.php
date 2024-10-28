<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/entity_signals_mapping_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response object for `BatchUpdateEntitySignalsMappings` method.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.BatchUpdateEntitySignalsMappingsResponse</code>
 */
class BatchUpdateEntitySignalsMappingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The `EntitySignalsMapping` objects updated.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.EntitySignalsMapping entity_signals_mappings = 1;</code>
     */
    private $entity_signals_mappings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\AdManager\V1\EntitySignalsMapping>|\Google\Protobuf\Internal\RepeatedField $entity_signals_mappings
     *           The `EntitySignalsMapping` objects updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\EntitySignalsMappingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The `EntitySignalsMapping` objects updated.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.EntitySignalsMapping entity_signals_mappings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitySignalsMappings()
    {
        return $this->entity_signals_mappings;
    }

    /**
     * The `EntitySignalsMapping` objects updated.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.EntitySignalsMapping entity_signals_mappings = 1;</code>
     * @param array<\Google\Ads\AdManager\V1\EntitySignalsMapping>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitySignalsMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\EntitySignalsMapping::class);
        $this->entity_signals_mappings = $arr;

        return $this;
    }

}

