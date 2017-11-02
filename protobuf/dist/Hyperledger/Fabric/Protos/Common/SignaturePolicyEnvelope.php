<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/policies.proto

namespace Hyperledger\Fabric\Protos\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SignaturePolicyEnvelope wraps a SignaturePolicy and includes a version for future enhancements
 *
 * Generated from protobuf message <code>common.SignaturePolicyEnvelope</code>
 */
class SignaturePolicyEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     */
    private $version = 0;
    /**
     * Generated from protobuf field <code>.common.SignaturePolicy rule = 2;</code>
     */
    private $rule = null;
    /**
     * Generated from protobuf field <code>repeated .common.MSPPrincipal identities = 3;</code>
     */
    private $identities;

    public function __construct() {
        \GPBMetadata\Common\Policies::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.SignaturePolicy rule = 2;</code>
     * @return \Hyperledger\Fabric\Protos\Common\SignaturePolicy
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Generated from protobuf field <code>.common.SignaturePolicy rule = 2;</code>
     * @param \Hyperledger\Fabric\Protos\Common\SignaturePolicy $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Common\SignaturePolicy::class);
        $this->rule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .common.MSPPrincipal identities = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdentities()
    {
        return $this->identities;
    }

    /**
     * Generated from protobuf field <code>repeated .common.MSPPrincipal identities = 3;</code>
     * @param \Hyperledger\Fabric\Protos\MSP\MSPPrincipal[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdentities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Hyperledger\Fabric\Protos\MSP\MSPPrincipal::class);
        $this->identities = $arr;

        return $this;
    }

}

