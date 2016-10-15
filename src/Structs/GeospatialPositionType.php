<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geospatialPositionType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Gives context to a Geo Spatial Position i.e. front door, back door, Post Box.
 * - type: rd:geospatialPositionType
 * @subpackage Structs
 */
class GeospatialPositionType extends AbstractStructBase
{
    /**
     * The geospatialPositionCode
     * Meta informations extracted from the WSDL
     * - documentation: Gives context to a Geo Spatial Position i.e. front door, back door, Post Box.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $geospatialPositionCode;
    /**
     * Constructor method for geospatialPositionType
     * @uses GeospatialPositionType::setGeospatialPositionCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $geospatialPositionCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $geospatialPositionCode = null)
    {
        $this
            ->setGeospatialPositionCode($geospatialPositionCode);
    }
    /**
     * Get geospatialPositionCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getGeospatialPositionCode()
    {
        return $this->geospatialPositionCode;
    }
    /**
     * Set geospatialPositionCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $geospatialPositionCode
     * @return \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType
     */
    public function setGeospatialPositionCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $geospatialPositionCode = null)
    {
        $this->geospatialPositionCode = $geospatialPositionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType
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
