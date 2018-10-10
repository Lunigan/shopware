<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for BigtableInstanceAdmin.ListInstances.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of requested instances.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * Locations from which Instance information could not be retrieved,
     * due to an outage or some other transient condition.
     * Instances whose Clusters are all in one of the failed locations
     * may be missing from `instances`, and Instances with at least one
     * Cluster in a failed location may only have partial information returned.
     *
     * Generated from protobuf field <code>repeated string failed_locations = 2;</code>
     */
    private $failed_locations;
    /**
     * Set if not all instances could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The list of requested instances.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The list of requested instances.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Instance instances = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Instance[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Instance::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * Locations from which Instance information could not be retrieved,
     * due to an outage or some other transient condition.
     * Instances whose Clusters are all in one of the failed locations
     * may be missing from `instances`, and Instances with at least one
     * Cluster in a failed location may only have partial information returned.
     *
     * Generated from protobuf field <code>repeated string failed_locations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailedLocations()
    {
        return $this->failed_locations;
    }

    /**
     * Locations from which Instance information could not be retrieved,
     * due to an outage or some other transient condition.
     * Instances whose Clusters are all in one of the failed locations
     * may be missing from `instances`, and Instances with at least one
     * Cluster in a failed location may only have partial information returned.
     *
     * Generated from protobuf field <code>repeated string failed_locations = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailedLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->failed_locations = $arr;

        return $this;
    }

    /**
     * Set if not all instances could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Set if not all instances could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

