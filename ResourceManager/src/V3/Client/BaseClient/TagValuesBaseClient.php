<?php
/*
 * Copyright 2023 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/resourcemanager/v3/tag_values.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ResourceManager\V3\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\ResourceManager\V3\CreateTagValueRequest;
use Google\Cloud\ResourceManager\V3\DeleteTagValueRequest;
use Google\Cloud\ResourceManager\V3\GetNamespacedTagValueRequest;
use Google\Cloud\ResourceManager\V3\GetTagValueRequest;
use Google\Cloud\ResourceManager\V3\ListTagValuesRequest;
use Google\Cloud\ResourceManager\V3\TagValue;
use Google\Cloud\ResourceManager\V3\UpdateTagValueRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Allow users to create and manage tag values.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\ResourceManager\V3\TagValuesClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createTagValueAsync(CreateTagValueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteTagValueAsync(DeleteTagValueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getNamespacedTagValueAsync(GetNamespacedTagValueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTagValueAsync(GetTagValueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTagValuesAsync(ListTagValuesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateTagValueAsync(UpdateTagValueRequest $request, array $optionalArgs = [])
 */
abstract class TagValuesBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.resourcemanager.v3.TagValues';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'cloudresourcemanager.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/tag_values_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/tag_values_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/tag_values_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/tag_values_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tag_value
     * resource.
     *
     * @param string $tagValue
     *
     * @return string The formatted tag_value resource.
     */
    public static function tagValueName(string $tagValue): string
    {
        return self::getPathTemplate('tagValue')->render([
            'tag_value' => $tagValue,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - tagValue: tagValues/{tag_value}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudresourcemanager.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a TagValue as a child of the specified TagKey. If a another
     * request with the same parameters is sent while the original request is in
     * process the second request will receive an error. A maximum of 1000
     * TagValues can exist under a TagKey at any given time.
     *
     * The async variant is {@see self::createTagValueAsync()} .
     *
     * @example samples/V3/TagValuesClient/create_tag_value.php
     *
     * @param CreateTagValueRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTagValue(CreateTagValueRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateTagValue', $request, $callOptions)->wait();
    }

    /**
     * Deletes a TagValue. The TagValue cannot have any bindings when it is
     * deleted.
     *
     * The async variant is {@see self::deleteTagValueAsync()} .
     *
     * @example samples/V3/TagValuesClient/delete_tag_value.php
     *
     * @param DeleteTagValueRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteTagValue(DeleteTagValueRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteTagValue', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a TagValue. The returned policy may be
     * empty if no such policy or resource exists. The `resource` field should
     * be the TagValue's resource name. For example: `tagValues/1234`.
     * The caller must have the
     * `cloudresourcemanager.googleapis.com/tagValues.getIamPolicy` permission on
     * the identified TagValue to get the access control policy.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @example samples/V3/TagValuesClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a TagValue by its namespaced name.
     * This method will return `PERMISSION_DENIED` if the value does not exist
     * or the user does not have permission to view it.
     *
     * The async variant is {@see self::getNamespacedTagValueAsync()} .
     *
     * @example samples/V3/TagValuesClient/get_namespaced_tag_value.php
     *
     * @param GetNamespacedTagValueRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TagValue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNamespacedTagValue(GetNamespacedTagValueRequest $request, array $callOptions = []): TagValue
    {
        return $this->startApiCall('GetNamespacedTagValue', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a TagValue. This method will return `PERMISSION_DENIED` if the
     * value does not exist or the user does not have permission to view it.
     *
     * The async variant is {@see self::getTagValueAsync()} .
     *
     * @example samples/V3/TagValuesClient/get_tag_value.php
     *
     * @param GetTagValueRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TagValue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTagValue(GetTagValueRequest $request, array $callOptions = []): TagValue
    {
        return $this->startApiCall('GetTagValue', $request, $callOptions)->wait();
    }

    /**
     * Lists all TagValues for a specific TagKey.
     *
     * The async variant is {@see self::listTagValuesAsync()} .
     *
     * @example samples/V3/TagValuesClient/list_tag_values.php
     *
     * @param ListTagValuesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listTagValues(ListTagValuesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTagValues', $request, $callOptions);
    }

    /**
     * Sets the access control policy on a TagValue, replacing any existing
     * policy. The `resource` field should be the TagValue's resource name.
     * For example: `tagValues/1234`.
     * The caller must have `resourcemanager.tagValues.setIamPolicy` permission
     * on the identified tagValue.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @example samples/V3/TagValuesClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified TagValue.
     * The `resource` field should be the TagValue's resource name. For example:
     * `tagValues/1234`.
     *
     * There are no permissions required for making this API call.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @example samples/V3/TagValuesClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates the attributes of the TagValue resource.
     *
     * The async variant is {@see self::updateTagValueAsync()} .
     *
     * @example samples/V3/TagValuesClient/update_tag_value.php
     *
     * @param UpdateTagValueRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTagValue(UpdateTagValueRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateTagValue', $request, $callOptions)->wait();
    }
}
