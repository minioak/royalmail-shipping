<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DSAKeyValueType Structs
 * @subpackage Structs
 */
class DSAKeyValueType extends AbstractStructBase
{
    /**
     * The P
     * @var base64Binary
     */
    public $P;
    /**
     * The Q
     * @var base64Binary
     */
    public $Q;
    /**
     * The G
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $G;
    /**
     * The Y
     * @var base64Binary
     */
    public $Y;
    /**
     * The J
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $J;
    /**
     * The Seed
     * @var base64Binary
     */
    public $Seed;
    /**
     * The PgenCounter
     * @var base64Binary
     */
    public $PgenCounter;
    /**
     * Constructor method for DSAKeyValueType
     * @uses DSAKeyValueType::setP()
     * @uses DSAKeyValueType::setQ()
     * @uses DSAKeyValueType::setG()
     * @uses DSAKeyValueType::setY()
     * @uses DSAKeyValueType::setJ()
     * @uses DSAKeyValueType::setSeed()
     * @uses DSAKeyValueType::setPgenCounter()
     * @param base64Binary $p
     * @param base64Binary $q
     * @param base64Binary $g
     * @param base64Binary $y
     * @param base64Binary $j
     * @param base64Binary $seed
     * @param base64Binary $pgenCounter
     */
    public function __construct(base64Binary $p = null, base64Binary $q = null, base64Binary $g = null, base64Binary $y = null, base64Binary $j = null, base64Binary $seed = null, base64Binary $pgenCounter = null)
    {
        $this
            ->setP($p)
            ->setQ($q)
            ->setG($g)
            ->setY($y)
            ->setJ($j)
            ->setSeed($seed)
            ->setPgenCounter($pgenCounter);
    }
    /**
     * Get P value
     * @return base64Binary|null
     */
    public function getP()
    {
        return $this->P;
    }
    /**
     * Set P value
     * @param base64Binary $p
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setP(base64Binary $p = null)
    {
        $this->P = $p;
        return $this;
    }
    /**
     * Get Q value
     * @return base64Binary|null
     */
    public function getQ()
    {
        return $this->Q;
    }
    /**
     * Set Q value
     * @param base64Binary $q
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setQ(base64Binary $q = null)
    {
        $this->Q = $q;
        return $this;
    }
    /**
     * Get G value
     * @return base64Binary|null
     */
    public function getG()
    {
        return $this->G;
    }
    /**
     * Set G value
     * @param base64Binary $g
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setG(base64Binary $g = null)
    {
        $this->G = $g;
        return $this;
    }
    /**
     * Get Y value
     * @return base64Binary|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param base64Binary $y
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setY(base64Binary $y = null)
    {
        $this->Y = $y;
        return $this;
    }
    /**
     * Get J value
     * @return base64Binary|null
     */
    public function getJ()
    {
        return $this->J;
    }
    /**
     * Set J value
     * @param base64Binary $j
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setJ(base64Binary $j = null)
    {
        $this->J = $j;
        return $this;
    }
    /**
     * Get Seed value
     * @return base64Binary|null
     */
    public function getSeed()
    {
        return $this->Seed;
    }
    /**
     * Set Seed value
     * @param base64Binary $seed
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setSeed(base64Binary $seed = null)
    {
        $this->Seed = $seed;
        return $this;
    }
    /**
     * Get PgenCounter value
     * @return base64Binary|null
     */
    public function getPgenCounter()
    {
        return $this->PgenCounter;
    }
    /**
     * Set PgenCounter value
     * @param base64Binary $pgenCounter
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
     */
    public function setPgenCounter(base64Binary $pgenCounter = null)
    {
        $this->PgenCounter = $pgenCounter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\DSAKeyValueType
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
