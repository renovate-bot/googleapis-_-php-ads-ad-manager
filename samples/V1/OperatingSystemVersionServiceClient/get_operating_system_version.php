<?php
/*
 * Copyright 2025 Google LLC
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

// [START admanager_v1_generated_OperatingSystemVersionService_GetOperatingSystemVersion_sync]
use Google\Ads\AdManager\V1\Client\OperatingSystemVersionServiceClient;
use Google\Ads\AdManager\V1\GetOperatingSystemVersionRequest;
use Google\Ads\AdManager\V1\OperatingSystemVersion;
use Google\ApiCore\ApiException;

/**
 * API to retrieve a `OperatingSystemVersion` object.
 *
 * @param string $formattedName The resource name of the OperatingSystemVersion.
 *                              Format:
 *                              `networks/{network_code}/operatingSystemVersions/{operating_system_version_id}`
 *                              Please see {@see OperatingSystemVersionServiceClient::operatingSystemVersionName()} for help formatting this field.
 */
function get_operating_system_version_sample(string $formattedName): void
{
    // Create a client.
    $operatingSystemVersionServiceClient = new OperatingSystemVersionServiceClient();

    // Prepare the request message.
    $request = (new GetOperatingSystemVersionRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var OperatingSystemVersion $response */
        $response = $operatingSystemVersionServiceClient->getOperatingSystemVersion($request);
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
    $formattedName = OperatingSystemVersionServiceClient::operatingSystemVersionName(
        '[NETWORK_CODE]',
        '[OPERATING_SYSTEM_VERSION]'
    );

    get_operating_system_version_sample($formattedName);
}
// [END admanager_v1_generated_OperatingSystemVersionService_GetOperatingSystemVersion_sync]
