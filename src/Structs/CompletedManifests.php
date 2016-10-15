<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completedManifests Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of manifest details
 * @subpackage Structs
 */
class CompletedManifests extends AbstractStructBase
{
    /**
     * The completedManifestInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo[]
     */
    public $completedManifestInfo;
    /**
     * Constructor method for completedManifests
     * @uses CompletedManifests::setCompletedManifestInfo()
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo[] $completedManifestInfo
     */
    public function __construct(array $completedManifestInfo = array())
    {
        $this
            ->setCompletedManifestInfo($completedManifestInfo);
    }
    /**
     * Get completedManifestInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo[]
     */
    public function getCompletedManifestInfo()
    {
        return $this->completedManifestInfo;
    }
    /**
     * Set completedManifestInfo value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo[] $completedManifestInfo
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifests
     */
    public function setCompletedManifestInfo(array $completedManifestInfo = array())
    {
        foreach ($completedManifestInfo as $completedManifestsCompletedManifestInfoItem) {
            // validation for constraint: itemType
            if (!$completedManifestsCompletedManifestInfoItem instanceof \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo) {
                throw new \InvalidArgumentException(sprintf('The completedManifestInfo property can only contain items of \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo, "%s" given', is_object($completedManifestsCompletedManifestInfoItem) ? get_class($completedManifestsCompletedManifestInfoItem) : gettype($completedManifestsCompletedManifestInfoItem)), __LINE__);
            }
        }
        $this->completedManifestInfo = $completedManifestInfo;
        return $this;
    }
    /**
     * Add item to completedManifestInfo value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo $item
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifests
     */
    public function addToCompletedManifestInfo(\Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo) {
            throw new \InvalidArgumentException(sprintf('The completedManifestInfo property can only contain items of \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->completedManifestInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifests
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
