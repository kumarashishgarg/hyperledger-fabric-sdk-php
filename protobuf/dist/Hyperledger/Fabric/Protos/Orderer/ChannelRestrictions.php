<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orderer/configuration.proto

namespace Hyperledger\Fabric\Protos\Orderer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ChannelRestrictions is the mssage which conveys restrictions on channel creation for an orderer
 *
 * Generated from protobuf message <code>orderer.ChannelRestrictions</code>
 */
class ChannelRestrictions extends \Google\Protobuf\Internal\Message
{
    /**
     * The max count of channels to allow to be created, a value of 0 indicates no limit
     *
     * Generated from protobuf field <code>uint64 max_count = 1;</code>
     */
    private $max_count = 0;

    public function __construct() {
        \GPBMetadata\Orderer\Configuration::initOnce();
        parent::__construct();
    }

    /**
     * The max count of channels to allow to be created, a value of 0 indicates no limit
     *
     * Generated from protobuf field <code>uint64 max_count = 1;</code>
     * @return int|string
     */
    public function getMaxCount()
    {
        return $this->max_count;
    }

    /**
     * The max count of channels to allow to be created, a value of 0 indicates no limit
     *
     * Generated from protobuf field <code>uint64 max_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_count = $var;

        return $this;
    }

}
