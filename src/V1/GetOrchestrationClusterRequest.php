<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a OrchestrationCluster.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.GetOrchestrationClusterRequest</code>
 */
class GetOrchestrationClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the resource
     *                     Please see {@see TelcoAutomationClient::orchestrationClusterName()} for help formatting this field.
     *
     * @return \Google\Cloud\TelcoAutomation\V1\GetOrchestrationClusterRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
