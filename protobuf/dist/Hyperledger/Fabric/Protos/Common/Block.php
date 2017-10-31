<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Hyperledger\Fabric\Protos\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is finalized block structure to be shared among the orderer and peer
 * Note that the BlockHeader chains to the previous BlockHeader, and the BlockData hash is embedded
 * in the BlockHeader.  This makes it natural and obvious that the Data is included in the hash, but
 * the Metadata is not.
 *
 * Generated from protobuf message <code>common.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.BlockHeader header = 1;</code>
     */
    private $header = null;
    /**
     * Generated from protobuf field <code>.common.BlockData data = 2;</code>
     */
    private $data = null;
    /**
     * Generated from protobuf field <code>.common.BlockMetadata metadata = 3;</code>
     */
    private $metadata = null;

    public function __construct() {
        \GPBMetadata\Common\Common::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.common.BlockHeader header = 1;</code>
     * @return \Hyperledger\Fabric\Protos\Common\BlockHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.common.BlockHeader header = 1;</code>
     * @param \Hyperledger\Fabric\Protos\Common\BlockHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Common\BlockHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.BlockData data = 2;</code>
     * @return \Hyperledger\Fabric\Protos\Common\BlockData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.common.BlockData data = 2;</code>
     * @param \Hyperledger\Fabric\Protos\Common\BlockData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Common\BlockData::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.BlockMetadata metadata = 3;</code>
     * @return \Hyperledger\Fabric\Protos\Common\BlockMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>.common.BlockMetadata metadata = 3;</code>
     * @param \Hyperledger\Fabric\Protos\Common\BlockMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Hyperledger\Fabric\Protos\Common\BlockMetadata::class);
        $this->metadata = $var;

        return $this;
    }

}
