<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/applied_label.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class AppliedLabel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/ads/admanager/v1/applied_label.protogoogle.ads.admanager.v1google/api/resource.proto"V
AppliedLabel5
label (	B&�A�A 
admanager.googleapis.com/Label
negated (B�
com.google.ads.admanager.v1BAppliedLabelProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

