<?php
/*
 * Copyright 2022 Google LLC
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

// [START dlp_v2_generated_DlpService_CreateDeidentifyTemplate_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dlp\V2\Client\DlpServiceClient;
use Google\Cloud\Dlp\V2\CreateDeidentifyTemplateRequest;
use Google\Cloud\Dlp\V2\DeidentifyTemplate;

/**
 * Creates a DeidentifyTemplate for reusing frequently used configuration
 * for de-identifying content, images, and storage.
 * See https://cloud.google.com/dlp/docs/creating-templates-deid to learn
 * more.
 *
 * @param string $formattedParent Parent resource name.
 *
 *                                The format of this value varies depending on the scope of the request
 *                                (project or organization) and whether you have [specified a processing
 *                                location](https://cloud.google.com/dlp/docs/specifying-location):
 *
 *                                + Projects scope, location specified:<br/>
 *                                `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
 *                                + Projects scope, no location specified (defaults to global):<br/>
 *                                `projects/`<var>PROJECT_ID</var>
 *                                + Organizations scope, location specified:<br/>
 *                                `organizations/`<var>ORG_ID</var>`/locations/`<var>LOCATION_ID</var>
 *                                + Organizations scope, no location specified (defaults to global):<br/>
 *                                `organizations/`<var>ORG_ID</var>
 *
 *                                The following example `parent` string specifies a parent project with the
 *                                identifier `example-project`, and specifies the `europe-west3` location
 *                                for processing data:
 *
 *                                parent=projects/example-project/locations/europe-west3
 *                                Please see {@see DlpServiceClient::organizationLocationName()} for help formatting this field.
 */
function create_deidentify_template_sample(string $formattedParent): void
{
    // Create a client.
    $dlpServiceClient = new DlpServiceClient();

    // Prepare the request message.
    $deidentifyTemplate = new DeidentifyTemplate();
    $request = (new CreateDeidentifyTemplateRequest())
        ->setParent($formattedParent)
        ->setDeidentifyTemplate($deidentifyTemplate);

    // Call the API and handle any network failures.
    try {
        /** @var DeidentifyTemplate $response */
        $response = $dlpServiceClient->createDeidentifyTemplate($request);
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
    $formattedParent = DlpServiceClient::organizationLocationName('[ORGANIZATION]', '[LOCATION]');

    create_deidentify_template_sample($formattedParent);
}
// [END dlp_v2_generated_DlpService_CreateDeidentifyTemplate_sync]
