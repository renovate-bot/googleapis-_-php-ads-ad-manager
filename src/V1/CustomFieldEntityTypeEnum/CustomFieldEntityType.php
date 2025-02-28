<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/custom_field_enums.proto

namespace Google\Ads\AdManager\V1\CustomFieldEntityTypeEnum;

use UnexpectedValueException;

/**
 * The types of entities that a CustomField can be applied to.
 *
 * Protobuf type <code>google.ads.admanager.v1.CustomFieldEntityTypeEnum.CustomFieldEntityType</code>
 */
class CustomFieldEntityType
{
    /**
     * No value specified
     *
     * Generated from protobuf enum <code>CUSTOM_FIELD_ENTITY_TYPE_UNSPECIFIED = 0;</code>
     */
    const CUSTOM_FIELD_ENTITY_TYPE_UNSPECIFIED = 0;
    /**
     * The CustomField is applied to LineItems.
     *
     * Generated from protobuf enum <code>LINE_ITEM = 1;</code>
     */
    const LINE_ITEM = 1;
    /**
     * The CustomField is applied to Orders.
     *
     * Generated from protobuf enum <code>ORDER = 2;</code>
     */
    const ORDER = 2;
    /**
     * The CustomField is applied to Creatives.
     *
     * Generated from protobuf enum <code>CREATIVE = 3;</code>
     */
    const CREATIVE = 3;
    /**
     * The CustomField is applied to Proposals.
     *
     * Generated from protobuf enum <code>PROPOSAL = 4;</code>
     */
    const PROPOSAL = 4;
    /**
     * The CustomField is applied to ProposalLineItems.
     *
     * Generated from protobuf enum <code>PROPOSAL_LINE_ITEM = 5;</code>
     */
    const PROPOSAL_LINE_ITEM = 5;

    private static $valueToName = [
        self::CUSTOM_FIELD_ENTITY_TYPE_UNSPECIFIED => 'CUSTOM_FIELD_ENTITY_TYPE_UNSPECIFIED',
        self::LINE_ITEM => 'LINE_ITEM',
        self::ORDER => 'ORDER',
        self::CREATIVE => 'CREATIVE',
        self::PROPOSAL => 'PROPOSAL',
        self::PROPOSAL_LINE_ITEM => 'PROPOSAL_LINE_ITEM',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


