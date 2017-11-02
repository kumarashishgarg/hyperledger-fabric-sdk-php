<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gossip/message.proto

namespace Hyperledger\Fabric\Protos\Gossip;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Leadership Message is sent during leader election to inform
 * remote peers about intent of peer to proclaim itself as leader
 *
 * Generated from protobuf message <code>gossip.LeadershipMessage</code>
 */
class LeadershipMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes pki_id = 1;</code>
     */
    private $pki_id = '';
    /**
     * Generated from protobuf field <code>.gossip.PeerTime timestamp = 2;</code>
     */
    private $timestamp = null;
    /**
     * Generated from protobuf field <code>bool is_declaration = 3;</code>
     */
    private $is_declaration = false;

    public function __construct() {
        \GPBMetadata\Gossip\Message::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes pki_id = 1;</code>
     * @return string
     */
    public function getPkiId()
    {
        return $this->pki_id;
    }

    /**
     * Generated from protobuf field <code>bytes pki_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPkiId($var)
    {
        GPBUtil::checkString($var, False);
        $this->pki_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.gossip.PeerTime timestamp = 2;</code>
     * @return \Hyperledger\Fabric\Protos\Gossip\PeerTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>.gossip.PeerTime timestamp = 2;</code>
     * @param \Hyperledger\Fabric\Protos\Gossip\PeerTime $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Gossip\PeerTime::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_declaration = 3;</code>
     * @return bool
     */
    public function getIsDeclaration()
    {
        return $this->is_declaration;
    }

    /**
     * Generated from protobuf field <code>bool is_declaration = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDeclaration($var)
    {
        GPBUtil::checkBool($var);
        $this->is_declaration = $var;

        return $this;
    }

}

