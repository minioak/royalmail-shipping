<?php

namespace Minioak\Royalmail\Shipping;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

if (! defined('MODULE_ROOT')) define('MODULE_ROOT', dirname(__FILE__) . '/../');

define('RM_WSDL', MODULE_ROOT . 'resources/wsdl/ShippingAPI_V2_0_8.wsdl');

class Api {
  
  protected static $options = [
    AbstractSoapClientBase::WSDL_URL => RM_WSDL,
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
  ];

  protected static $services = [
    'Print' => '_Print',
    'Create' => 'Create',
    'Cancel' => 'Cancel',
    'Request' => 'Request'
  ]

  public static function __callStatic($method, $arguments) 
  {
    if (in_array($method, self::$services)) 
    {
      $serviceClass = new "\Minioak\Royalmail\Services\{self::$services[$method]}";
      $service = new $serviceClass(self::$options);

      return $service;
    }
  }
} 
