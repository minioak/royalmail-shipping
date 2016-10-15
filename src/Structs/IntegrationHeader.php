<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for integrationHeader Structs
 * Meta informations extracted from the WSDL
 * - documentation: Common integration header definition
 * - type: int:integrationHeader
 * @subpackage Structs
 */
class IntegrationHeader extends AbstractStructBase
{
    /**
     * The dateTime
     * Meta informations extracted from the WSDL
     * - documentation: Date timestamp associated with when the data was generated, sent or received | dateTime represents a period in time which could be a particular month, day, and year at which some event happened or will happen but also includes a
     * breakdown of time using hours, minutes, seconds and milliseconds. A dateTime stamp is a common use for this data type so that a precise record of an event can be captured.
     * - minOccurs: 0
     * - nillable: false
     * - base: xs:dateTime
     * @var string
     */
    public $dateTime;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - documentation: Version of the service | A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and
     * gives the ability to do arithmetic on them.
     * - minOccurs: 0
     * - base: xs:decimal
     * @var float
     */
    public $version;
    /**
     * The identification
     * Meta informations extracted from the WSDL
     * - documentation: Identification details associated with the Service Requestor or Service Provider
     * @var \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
     */
    public $identification;
    /**
     * The testFlag
     * Meta informations extracted from the WSDL
     * - documentation: Flag which can be used to test that the exposed service is available. It is not expected that this flag will be used under normal BAU service operation. | Boolean, or boolean logic, is a subset of algebra used for creating true/false
     * statements. Boolean expressions use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be referred to as 'flags'.
     * - minOccurs: 0
     * - base: xs:boolean
     * @var bool
     */
    public $testFlag;
    /**
     * The debugFlag
     * Meta informations extracted from the WSDL
     * - documentation: Flag which can be used to allow any messages to be dynamically debugged. It is not expected that this flag will be used under normal BAU service operation. | Boolean, or boolean logic, is a subset of algebra used for creating
     * true/false statements. Boolean expressions use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be referred to as 'flags'.
     * - minOccurs: 0
     * - base: xs:boolean
     * @var bool
     */
    public $debugFlag;
    /**
     * The performanceFlag
     * Meta informations extracted from the WSDL
     * - documentation: Flag which can be used to track the performance of the service across RMG systems (entry time, exit time, latency etc). | Boolean, or boolean logic, is a subset of algebra used for creating true/false statements. Boolean expressions
     * use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be referred to as 'flags'.
     * - minOccurs: 0
     * - base: xs:boolean
     * @var bool
     */
    public $performanceFlag;
    /**
     * Constructor method for integrationHeader
     * @uses IntegrationHeader::setDateTime()
     * @uses IntegrationHeader::setVersion()
     * @uses IntegrationHeader::setIdentification()
     * @uses IntegrationHeader::setTestFlag()
     * @uses IntegrationHeader::setDebugFlag()
     * @uses IntegrationHeader::setPerformanceFlag()
     * @param string $dateTime
     * @param float $version
     * @param \Minioak\Royalmail\Shipping\Structs\IdentificationStructure $identification
     * @param bool $testFlag
     * @param bool $debugFlag
     * @param bool $performanceFlag
     */
    public function __construct($dateTime = null, $version = null, \Minioak\Royalmail\Shipping\Structs\IdentificationStructure $identification = null, $testFlag = null, $debugFlag = null, $performanceFlag = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setVersion($version)
            ->setIdentification($identification)
            ->setTestFlag($testFlag)
            ->setDebugFlag($debugFlag)
            ->setPerformanceFlag($performanceFlag);
    }
    /**
     * Get dateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * Set dateTime value
     * @param string $dateTime
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * Get version value
     * @return float|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param float $version
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setVersion($version = null)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Get identification value
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure|null
     */
    public function getIdentification()
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param \Minioak\Royalmail\Shipping\Structs\IdentificationStructure $identification
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setIdentification(\Minioak\Royalmail\Shipping\Structs\IdentificationStructure $identification = null)
    {
        $this->identification = $identification;
        return $this;
    }
    /**
     * Get testFlag value
     * @return bool|null
     */
    public function getTestFlag()
    {
        return $this->testFlag;
    }
    /**
     * Set testFlag value
     * @param bool $testFlag
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setTestFlag($testFlag = null)
    {
        $this->testFlag = $testFlag;
        return $this;
    }
    /**
     * Get debugFlag value
     * @return bool|null
     */
    public function getDebugFlag()
    {
        return $this->debugFlag;
    }
    /**
     * Set debugFlag value
     * @param bool $debugFlag
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setDebugFlag($debugFlag = null)
    {
        $this->debugFlag = $debugFlag;
        return $this;
    }
    /**
     * Get performanceFlag value
     * @return bool|null
     */
    public function getPerformanceFlag()
    {
        return $this->performanceFlag;
    }
    /**
     * Set performanceFlag value
     * @param bool $performanceFlag
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public function setPerformanceFlag($performanceFlag = null)
    {
        $this->performanceFlag = $performanceFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
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
