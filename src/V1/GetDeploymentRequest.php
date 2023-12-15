<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `GetDeployment`.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.GetDeploymentRequest</code>
 */
class GetDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the deployment.
     * Case 1: If the name provided in the request is
     * {deployment_id}&#64;{revision_id}, then the revision with revision_id will be
     * returned.
     * Case 2: If the name provided in the request is {deployment}, then
     * the current state of the deployment is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. Defines the type of view of the deployment.
     * When field is not present VIEW_BASIC is considered as default.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;

    /**
     * @param string $name Required. The name of the deployment.
     *                     Case 1: If the name provided in the request is
     *                     {deployment_id}&#64;{revision_id}, then the revision with revision_id will be
     *                     returned.
     *                     Case 2: If the name provided in the request is {deployment}, then
     *                     the current state of the deployment is returned. Please see
     *                     {@see TelcoAutomationClient::deploymentName()} for help formatting this field.
     *
     * @return \Google\Cloud\TelcoAutomation\V1\GetDeploymentRequest
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
     *           Required. The name of the deployment.
     *           Case 1: If the name provided in the request is
     *           {deployment_id}&#64;{revision_id}, then the revision with revision_id will be
     *           returned.
     *           Case 2: If the name provided in the request is {deployment}, then
     *           the current state of the deployment is returned.
     *     @type int $view
     *           Optional. Defines the type of view of the deployment.
     *           When field is not present VIEW_BASIC is considered as default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the deployment.
     * Case 1: If the name provided in the request is
     * {deployment_id}&#64;{revision_id}, then the revision with revision_id will be
     * returned.
     * Case 2: If the name provided in the request is {deployment}, then
     * the current state of the deployment is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the deployment.
     * Case 1: If the name provided in the request is
     * {deployment_id}&#64;{revision_id}, then the revision with revision_id will be
     * returned.
     * Case 2: If the name provided in the request is {deployment}, then
     * the current state of the deployment is returned.
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

    /**
     * Optional. Defines the type of view of the deployment.
     * When field is not present VIEW_BASIC is considered as default.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. Defines the type of view of the deployment.
     * When field is not present VIEW_BASIC is considered as default.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1.DeploymentView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\TelcoAutomation\V1\DeploymentView::class);
        $this->view = $var;

        return $this;
    }

}
