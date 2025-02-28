<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/custom_field_enums.proto

namespace Google\Ads\AdManager\V1\CustomFieldDataTypeEnum;

use UnexpectedValueException;

/**
 * The data type for a CustomField.
 *
 * Protobuf type <code>google.ads.admanager.v1.CustomFieldDataTypeEnum.CustomFieldDataType</code>
 */
class CustomFieldDataType
{
    /**
     * No value specified
     *
     * Generated from protobuf enum <code>CUSTOM_FIELD_DATA_TYPE_UNSPECIFIED = 0;</code>
     */
    const CUSTOM_FIELD_DATA_TYPE_UNSPECIFIED = 0;
    /**
     * A string field
     * The max length is 255 characters.
     *
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * A number field.
     *
     * Generated from protobuf enum <code>NUMBER = 2;</code>
     */
    const NUMBER = 2;
    /**
     * A "Yes" or "No" toggle field.
     *
     * Generated from protobuf enum <code>TOGGLE = 3;</code>
     */
    const TOGGLE = 3;
    /**
     * A drop-down field.
     *
     * Generated from protobuf enum <code>DROP_DOWN = 4;</code>
     */
    const DROP_DOWN = 4;

    private static $valueToName = [
        self::CUSTOM_FIELD_DATA_TYPE_UNSPECIFIED => 'CUSTOM_FIELD_DATA_TYPE_UNSPECIFIED',
        self::STRING => 'STRING',
        self::NUMBER => 'NUMBER',
        self::TOGGLE => 'TOGGLE',
        self::DROP_DOWN => 'DROP_DOWN',
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


