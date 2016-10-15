<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contentDetails Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of single parcel structures
 * @subpackage Structs
 */
class ContentDetails extends AbstractStructBase
{
    /**
     * The contentDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Minioak\Royalmail\Shipping\Structs\ContentDetail[]
     */
    public $contentDetail;
    /**
     * Constructor method for contentDetails
     * @uses ContentDetails::setContentDetail()
     * @param \Minioak\Royalmail\Shipping\Structs\ContentDetail[] $contentDetail
     */
    public function __construct(array $contentDetail = array())
    {
        $this
            ->setContentDetail($contentDetail);
    }
    /**
     * Get contentDetail value
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail[]|null
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
    /**
     * Set contentDetail value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ContentDetail[] $contentDetail
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetails
     */
    public function setContentDetail(array $contentDetail = array())
    {
        foreach ($contentDetail as $contentDetailsContentDetailItem) {
            // validation for constraint: itemType
            if (!$contentDetailsContentDetailItem instanceof \Minioak\Royalmail\Shipping\Structs\ContentDetail) {
                throw new \InvalidArgumentException(sprintf('The contentDetail property can only contain items of \Minioak\Royalmail\Shipping\Structs\ContentDetail, "%s" given', is_object($contentDetailsContentDetailItem) ? get_class($contentDetailsContentDetailItem) : gettype($contentDetailsContentDetailItem)), __LINE__);
            }
        }
        $this->contentDetail = $contentDetail;
        return $this;
    }
    /**
     * Add item to contentDetail value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ContentDetail $item
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetails
     */
    public function addToContentDetail(\Minioak\Royalmail\Shipping\Structs\ContentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ContentDetail) {
            throw new \InvalidArgumentException(sprintf('The contentDetail property can only contain items of \Minioak\Royalmail\Shipping\Structs\ContentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->contentDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetails
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
