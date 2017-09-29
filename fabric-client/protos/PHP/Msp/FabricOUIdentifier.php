<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: msp/msp_config.proto

namespace Msp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * FabricOUIdentifier represents an organizational unit and
 * its related chain of trust identifier.
 * </pre>
 *
 * Protobuf type <code>msp.FabricOUIdentifier</code>
 */
class FabricOUIdentifier extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Certificate represents the second certificate in a certification chain.
     * (Notice that the first certificate in a certification chain is supposed
     * to be the certificate of an identity).
     * It must correspond to the certificate of root or intermediate CA
     * recognized by the MSP this message belongs to.
     * Starting from this certificate, a certification chain is computed
     * and boud to the OrganizationUnitIdentifier specified
     * </pre>
     *
     * <code>bytes certificate = 1;</code>
     */
    private $certificate = '';
    /**
     * <pre>
     * OrganizationUnitIdentifier defines the organizational unit under the
     * MSP identified with MSPIdentifier
     * </pre>
     *
     * <code>string organizational_unit_identifier = 2;</code>
     */
    private $organizational_unit_identifier = '';

    public function __construct() {
        \GPBMetadata\Msp\MspConfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Certificate represents the second certificate in a certification chain.
     * (Notice that the first certificate in a certification chain is supposed
     * to be the certificate of an identity).
     * It must correspond to the certificate of root or intermediate CA
     * recognized by the MSP this message belongs to.
     * Starting from this certificate, a certification chain is computed
     * and boud to the OrganizationUnitIdentifier specified
     * </pre>
     *
     * <code>bytes certificate = 1;</code>
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * <pre>
     * Certificate represents the second certificate in a certification chain.
     * (Notice that the first certificate in a certification chain is supposed
     * to be the certificate of an identity).
     * It must correspond to the certificate of root or intermediate CA
     * recognized by the MSP this message belongs to.
     * Starting from this certificate, a certification chain is computed
     * and boud to the OrganizationUnitIdentifier specified
     * </pre>
     *
     * <code>bytes certificate = 1;</code>
     */
    public function setCertificate($var)
    {
        GPBUtil::checkString($var, False);
        $this->certificate = $var;
    }

    /**
     * <pre>
     * OrganizationUnitIdentifier defines the organizational unit under the
     * MSP identified with MSPIdentifier
     * </pre>
     *
     * <code>string organizational_unit_identifier = 2;</code>
     */
    public function getOrganizationalUnitIdentifier()
    {
        return $this->organizational_unit_identifier;
    }

    /**
     * <pre>
     * OrganizationUnitIdentifier defines the organizational unit under the
     * MSP identified with MSPIdentifier
     * </pre>
     *
     * <code>string organizational_unit_identifier = 2;</code>
     */
    public function setOrganizationalUnitIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->organizational_unit_identifier = $var;
    }

}
