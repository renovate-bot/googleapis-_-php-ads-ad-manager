<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/custom_targeting_key_messages.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class CustomTargetingKeyMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\CustomTargetingKeyEnums::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/ads/admanager/v1/custom_targeting_key_messages.protogoogle.ads.admanager.v1google/api/field_behavior.protogoogle/api/resource.proto"�
CustomTargetingKey
name (	B�A$
custom_targeting_key_id (B�A
ad_tag_name (	B�A
display_name (	B�A]
type (2J.google.ads.admanager.v1.CustomTargetingKeyTypeEnum.CustomTargetingKeyTypeB�Ac
status (2N.google.ads.admanager.v1.CustomTargetingKeyStatusEnum.CustomTargetingKeyStatusB�A|
reportable_type (2^.google.ads.admanager.v1.CustomTargetingKeyReportableTypeEnum.CustomTargetingKeyReportableTypeB�A:��A�
+admanager.googleapis.com/CustomTargetingKeyBnetworks/{network_code}/customTargetingKeys/{custom_targeting_key}*customTargetingKeys2customTargetingKeyB�
com.google.ads.admanager.v1BCustomTargetingKeyMessagesProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

