<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geoSpatialPosition Structs
 * Meta informations extracted from the WSDL
 * - documentation: defines the exact position according to a geo spatial system
 * - type: com:geoSpatialPosition
 * @subpackage Structs
 */
class GeoSpatialPosition extends AbstractStructBase
{
    /**
     * The geoDeticSystem
     * Meta informations extracted from the WSDL
     * - documentation: Standard global positioning system being used i.e. WGS84
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public $geoDeticSystem;
    /**
     * The geoSpatialPositionType
     * Meta informations extracted from the WSDL
     * - documentation: Defines the context for a geo spatial location i.e. back door, front door, post box etc.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType
     */
    public $geoSpatialPositionType;
    /**
     * The altitude
     * Meta informations extracted from the WSDL
     * - documentation: Defines the height component of a position | A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17
     * without rounding, and gives the ability to do arithmetic on them.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:decimal
     * @var float
     */
    public $altitude;
    /**
     * The longitude
     * Meta informations extracted from the WSDL
     * - documentation: The longitude component of a geospatial position | A decimal data type representing Latitude and Longitude data. The format of decimal 10,7 was chosen as a generic representation which facilities conversion between geospatial systems
     * | A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and gives the ability to do arithmetic on
     * them.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - fractionDigits: 7
     * - totalDigits: 10
     * - base: xs:decimal
     * @var float
     */
    public $longitude;
    /**
     * The latitude
     * Meta informations extracted from the WSDL
     * - documentation: The latitude component of a geospatial position | A decimal data type representing Latitude and Longitude data. The format of decimal 10,7 was chosen as a generic representation which facilities conversion between geospatial systems
     * | A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and gives the ability to do arithmetic on
     * them.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - fractionDigits: 7
     * - totalDigits: 10
     * - base: xs:decimal
     * @var float
     */
    public $latitude;
    /**
     * Constructor method for geoSpatialPosition
     * @uses GeoSpatialPosition::setGeoDeticSystem()
     * @uses GeoSpatialPosition::setGeoSpatialPositionType()
     * @uses GeoSpatialPosition::setAltitude()
     * @uses GeoSpatialPosition::setLongitude()
     * @uses GeoSpatialPosition::setLatitude()
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $geoDeticSystem
     * @param \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType $geoSpatialPositionType
     * @param float $altitude
     * @param float $longitude
     * @param float $latitude
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\SystemNameType $geoDeticSystem = null, \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType $geoSpatialPositionType = null, $altitude = null, $longitude = null, $latitude = null)
    {
        $this
            ->setGeoDeticSystem($geoDeticSystem)
            ->setGeoSpatialPositionType($geoSpatialPositionType)
            ->setAltitude($altitude)
            ->setLongitude($longitude)
            ->setLatitude($latitude);
    }
    /**
     * Get geoDeticSystem value
     * @return \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public function getGeoDeticSystem()
    {
        return $this->geoDeticSystem;
    }
    /**
     * Set geoDeticSystem value
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $geoDeticSystem
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
     */
    public function setGeoDeticSystem(\Minioak\Royalmail\Shipping\Structs\SystemNameType $geoDeticSystem = null)
    {
        $this->geoDeticSystem = $geoDeticSystem;
        return $this;
    }
    /**
     * Get geoSpatialPositionType value
     * @return \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType|null
     */
    public function getGeoSpatialPositionType()
    {
        return $this->geoSpatialPositionType;
    }
    /**
     * Set geoSpatialPositionType value
     * @param \Minioak\Royalmail\Shipping\Structs\GeospatialPositionType $geoSpatialPositionType
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
     */
    public function setGeoSpatialPositionType(\Minioak\Royalmail\Shipping\Structs\GeospatialPositionType $geoSpatialPositionType = null)
    {
        $this->geoSpatialPositionType = $geoSpatialPositionType;
        return $this;
    }
    /**
     * Get altitude value
     * @return float|null
     */
    public function getAltitude()
    {
        return $this->altitude;
    }
    /**
     * Set altitude value
     * @param float $altitude
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
     */
    public function setAltitude($altitude = null)
    {
        $this->altitude = $altitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($longitude) && strlen(substr($longitude, strpos($longitude, '.'))) !== 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 7 fraction digits, "%d" given', strlen(substr($longitude, strpos($longitude, '.')))), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($longitude) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $longitude)) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 digits, "%d" given', strlen(substr($longitude, strpos($longitude, '.')))), __LINE__);
        }
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($latitude) && strlen(substr($latitude, strpos($latitude, '.'))) !== 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 7 fraction digits, "%d" given', strlen(substr($latitude, strpos($latitude, '.')))), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($latitude) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $latitude)) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 digits, "%d" given', strlen(substr($latitude, strpos($latitude, '.')))), __LINE__);
        }
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\GeoSpatialPosition
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
