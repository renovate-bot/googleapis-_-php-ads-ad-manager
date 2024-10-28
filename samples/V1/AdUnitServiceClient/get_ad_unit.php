<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START admanager_v1_generated_AdUnitService_GetAdUnit_sync]
use Google\Ads\AdManager\V1\AdUnit;
use Google\Ads\AdManager\V1\Client\AdUnitServiceClient;
use Google\Ads\AdManager\V1\GetAdUnitRequest;
use Google\ApiCore\ApiException;

/**
 * API to retrieve an AdUnit object.
 *
 * @param string $formattedName The resource name of the AdUnit.
 *                              Format: `networks/{network_code}/adUnits/{ad_unit_id}`
 *                              Please see {@see AdUnitServiceClient::adUnitName()} for help formatting this field.
 */
function get_ad_unit_sample(string $formattedName): void
{
    // Create a client.
    $adUnitServiceClient = new AdUnitServiceClient();

    // Prepare the request message.
    $request = (new GetAdUnitRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var AdUnit $response */
        $response = $adUnitServiceClient->getAdUnit($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = AdUnitServiceClient::adUnitName('[NETWORK_CODE]', '[AD_UNIT]');

    get_ad_unit_sample($formattedName);
}
// [END admanager_v1_generated_AdUnitService_GetAdUnit_sync]
