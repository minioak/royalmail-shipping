<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelImages Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold an array of shipment numbers
 * @subpackage Structs
 */
class LabelImages extends AbstractStructBase
{
    /**
     * The image1DBarcode
     * Meta informations extracted from the WSDL
     * - documentation: Used in the digital representation of documents
     * @var base64Binary
     */
    public $image1DBarcode;
    /**
     * The image2DMatrix
     * Meta informations extracted from the WSDL
     * - documentation: Used in the digital representation of 2D Barcodes
     * @var base64Binary
     */
    public $image2DMatrix;
    /**
     * Constructor method for labelImages
     * @uses LabelImages::setImage1DBarcode()
     * @uses LabelImages::setImage2DMatrix()
     * @param base64Binary $image1DBarcode
     * @param base64Binary $image2DMatrix
     */
    public function __construct(base64Binary $image1DBarcode = null, base64Binary $image2DMatrix = null)
    {
        $this
            ->setImage1DBarcode($image1DBarcode)
            ->setImage2DMatrix($image2DMatrix);
    }
    /**
     * Get image1DBarcode value
     * @return base64Binary|null
     */
    public function getImage1DBarcode()
    {
        return $this->image1DBarcode;
    }
    /**
     * Set image1DBarcode value
     * @param base64Binary $image1DBarcode
     * @return \Minioak\Royalmail\Shipping\Structs\LabelImages
     */
    public function setImage1DBarcode(base64Binary $image1DBarcode = null)
    {
        $this->image1DBarcode = $image1DBarcode;
        return $this;
    }
    /**
     * Get image2DMatrix value
     * @return base64Binary|null
     */
    public function getImage2DMatrix()
    {
        return $this->image2DMatrix;
    }
    /**
     * Set image2DMatrix value
     * @param base64Binary $image2DMatrix
     * @return \Minioak\Royalmail\Shipping\Structs\LabelImages
     */
    public function setImage2DMatrix(base64Binary $image2DMatrix = null)
    {
        $this->image2DMatrix = $image2DMatrix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\LabelImages
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
