<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

/**
 * The supported time ranges.
 *
 * Protobuf enum <code>Google\Devtools\Clouderrorreporting\V1beta1\QueryTimeRange\Period</code>
 */
class QueryTimeRange_Period
{
    /**
     * Do not use.
     *
     * Generated from protobuf enum <code>PERIOD_UNSPECIFIED = 0;</code>
     */
    const PERIOD_UNSPECIFIED = 0;
    /**
     * Retrieve data for the last hour.
     * Recommended minimum timed count duration: 1 min.
     *
     * Generated from protobuf enum <code>PERIOD_1_HOUR = 1;</code>
     */
    const PERIOD_1_HOUR = 1;
    /**
     * Retrieve data for the last 6 hours.
     * Recommended minimum timed count duration: 10 min.
     *
     * Generated from protobuf enum <code>PERIOD_6_HOURS = 2;</code>
     */
    const PERIOD_6_HOURS = 2;
    /**
     * Retrieve data for the last day.
     * Recommended minimum timed count duration: 1 hour.
     *
     * Generated from protobuf enum <code>PERIOD_1_DAY = 3;</code>
     */
    const PERIOD_1_DAY = 3;
    /**
     * Retrieve data for the last week.
     * Recommended minimum timed count duration: 6 hours.
     *
     * Generated from protobuf enum <code>PERIOD_1_WEEK = 4;</code>
     */
    const PERIOD_1_WEEK = 4;
    /**
     * Retrieve data for the last 30 days.
     * Recommended minimum timed count duration: 1 day.
     *
     * Generated from protobuf enum <code>PERIOD_30_DAYS = 5;</code>
     */
    const PERIOD_30_DAYS = 5;
}

