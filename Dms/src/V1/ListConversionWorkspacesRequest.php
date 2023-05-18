<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retrieve a list of all conversion workspaces in a given project and location.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.ListConversionWorkspacesRequest</code>
 */
class ListConversionWorkspacesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent which owns this collection of conversion workspaces.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of conversion workspaces to return. The service may
     * return fewer than this value. If unspecified, at most 50 sets are returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The nextPageToken value received in the previous call to
     * conversionWorkspaces.list, used in the subsequent request to retrieve the
     * next page of results. On first call this should be left blank. When
     * paginating, all other parameters provided to conversionWorkspaces.list must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * A filter expression that filters conversion workspaces listed in the
     * response. The expression must specify the field name, a comparison
     * operator, and the value that you want to use for filtering. The value must
     * be a string, a number, or a boolean. The comparison operator must be either
     * =, !=, >, or <. For example, list conversion workspaces created this year
     * by specifying **createTime %gt; 2020-01-01T00:00:00.000000000Z.** You can
     * also filter nested fields. For example, you could specify
     * **source.version = "12.c.1"** to select all conversion workspaces with
     * source database version equal to 12.c.1.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent which owns this collection of conversion workspaces.
     *     @type int $page_size
     *           The maximum number of conversion workspaces to return. The service may
     *           return fewer than this value. If unspecified, at most 50 sets are returned.
     *     @type string $page_token
     *           The nextPageToken value received in the previous call to
     *           conversionWorkspaces.list, used in the subsequent request to retrieve the
     *           next page of results. On first call this should be left blank. When
     *           paginating, all other parameters provided to conversionWorkspaces.list must
     *           match the call that provided the page token.
     *     @type string $filter
     *           A filter expression that filters conversion workspaces listed in the
     *           response. The expression must specify the field name, a comparison
     *           operator, and the value that you want to use for filtering. The value must
     *           be a string, a number, or a boolean. The comparison operator must be either
     *           =, !=, >, or <. For example, list conversion workspaces created this year
     *           by specifying **createTime %gt; 2020-01-01T00:00:00.000000000Z.** You can
     *           also filter nested fields. For example, you could specify
     *           **source.version = "12.c.1"** to select all conversion workspaces with
     *           source database version equal to 12.c.1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent which owns this collection of conversion workspaces.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent which owns this collection of conversion workspaces.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of conversion workspaces to return. The service may
     * return fewer than this value. If unspecified, at most 50 sets are returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of conversion workspaces to return. The service may
     * return fewer than this value. If unspecified, at most 50 sets are returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The nextPageToken value received in the previous call to
     * conversionWorkspaces.list, used in the subsequent request to retrieve the
     * next page of results. On first call this should be left blank. When
     * paginating, all other parameters provided to conversionWorkspaces.list must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The nextPageToken value received in the previous call to
     * conversionWorkspaces.list, used in the subsequent request to retrieve the
     * next page of results. On first call this should be left blank. When
     * paginating, all other parameters provided to conversionWorkspaces.list must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A filter expression that filters conversion workspaces listed in the
     * response. The expression must specify the field name, a comparison
     * operator, and the value that you want to use for filtering. The value must
     * be a string, a number, or a boolean. The comparison operator must be either
     * =, !=, >, or <. For example, list conversion workspaces created this year
     * by specifying **createTime %gt; 2020-01-01T00:00:00.000000000Z.** You can
     * also filter nested fields. For example, you could specify
     * **source.version = "12.c.1"** to select all conversion workspaces with
     * source database version equal to 12.c.1.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter expression that filters conversion workspaces listed in the
     * response. The expression must specify the field name, a comparison
     * operator, and the value that you want to use for filtering. The value must
     * be a string, a number, or a boolean. The comparison operator must be either
     * =, !=, >, or <. For example, list conversion workspaces created this year
     * by specifying **createTime %gt; 2020-01-01T00:00:00.000000000Z.** You can
     * also filter nested fields. For example, you could specify
     * **source.version = "12.c.1"** to select all conversion workspaces with
     * source database version equal to 12.c.1.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

