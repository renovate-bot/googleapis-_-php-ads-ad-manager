<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/admanager_error.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * / AdManagerError contains all the information required for processing a
 * / particular error thrown by the AdManager API.
 * /
 * / At least one AdManagerError should be included in all error messages sent
 * to / the client.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.AdManagerError</code>
 */
class AdManagerError extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifying string for this error.
     *
     * Generated from protobuf field <code>string error_code = 1;</code>
     */
    protected $error_code = '';
    /**
     * A publisher appropriate explanation of this error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * The field path that triggered this error.
     *
     * Generated from protobuf field <code>string field_path = 3;</code>
     */
    protected $field_path = '';
    /**
     * The value that triggered this error.
     *
     * Generated from protobuf field <code>string trigger = 4;</code>
     */
    protected $trigger = '';
    /**
     * The stack trace that accompanies this error.
     *
     * Generated from protobuf field <code>string stack_trace = 5;</code>
     */
    protected $stack_trace = '';
    /**
     * A list of messages that carry any additional error details.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 6;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $error_code
     *           The unique identifying string for this error.
     *     @type string $message
     *           A publisher appropriate explanation of this error.
     *     @type string $field_path
     *           The field path that triggered this error.
     *     @type string $trigger
     *           The value that triggered this error.
     *     @type string $stack_trace
     *           The stack trace that accompanies this error.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $details
     *           A list of messages that carry any additional error details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\AdmanagerError::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifying string for this error.
     *
     * Generated from protobuf field <code>string error_code = 1;</code>
     * @return string
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * The unique identifying string for this error.
     *
     * Generated from protobuf field <code>string error_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_code = $var;

        return $this;
    }

    /**
     * A publisher appropriate explanation of this error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * A publisher appropriate explanation of this error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The field path that triggered this error.
     *
     * Generated from protobuf field <code>string field_path = 3;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * The field path that triggered this error.
     *
     * Generated from protobuf field <code>string field_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * The value that triggered this error.
     *
     * Generated from protobuf field <code>string trigger = 4;</code>
     * @return string
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * The value that triggered this error.
     *
     * Generated from protobuf field <code>string trigger = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger = $var;

        return $this;
    }

    /**
     * The stack trace that accompanies this error.
     *
     * Generated from protobuf field <code>string stack_trace = 5;</code>
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stack_trace;
    }

    /**
     * The stack trace that accompanies this error.
     *
     * Generated from protobuf field <code>string stack_trace = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStackTrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack_trace = $var;

        return $this;
    }

    /**
     * A list of messages that carry any additional error details.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A list of messages that carry any additional error details.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any details = 6;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->details = $arr;

        return $this;
    }

}
