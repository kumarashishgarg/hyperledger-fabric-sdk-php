<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gossip/message.proto

namespace Hyperledger\Fabric\Protos\Gossip;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RemoteStateResponse is used to send a set of blocks
 * to a remote peer
 *
 * Generated from protobuf message <code>gossip.RemoteStateResponse</code>
 */
class RemoteStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .gossip.Payload payloads = 1;</code>
     */
    private $payloads;

    public function __construct() {
        \GPBMetadata\Gossip\Message::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .gossip.Payload payloads = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * Generated from protobuf field <code>repeated .gossip.Payload payloads = 1;</code>
     * @param \Hyperledger\Fabric\Protos\Gossip\Payload[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayloads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Hyperledger\Fabric\Protos\Gossip\Payload::class);
        $this->payloads = $arr;

        return $this;
    }

}

