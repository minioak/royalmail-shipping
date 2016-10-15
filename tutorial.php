<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/Users/jfm/Downloads/Shipping API V2 (SOAP)/ShippingAPI_V2_0_9.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/Users/jfm/Downloads/Shipping API V2 (SOAP)/ShippingAPI_V2_0_9.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Minioak\Royalmail\Shipping\ClassMap::get(),
);
/**
 * Samples for Create ServiceType
 */
$create = new \Minioak\Royalmail\Shipping\Services\Create($options);
$create->setSoapHeaderSecurity($Security);
/**
 * Sample call for createShipment operation/method
 */
if ($create->createShipment(new \Minioak\Royalmail\Shipping\Structs\CreateShipmentRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createManifest operation/method
 */
if ($create->createManifest(new \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \Minioak\Royalmail\Shipping\Services\_Print($options);
$print->setSoapHeaderSecurity($Security);
/**
 * Sample call for printLabel operation/method
 */
if ($print->printLabel(new \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printManifest operation/method
 */
if ($print->printManifest(new \Minioak\Royalmail\Shipping\Structs\PrintManifestRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printDocument operation/method
 */
if ($print->printDocument(new \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Minioak\Royalmail\Shipping\Services\Update($options);
$update->setSoapHeaderSecurity($Security);
/**
 * Sample call for updateShipment operation/method
 */
if ($update->updateShipment(new \Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Minioak\Royalmail\Shipping\Services\Cancel($options);
$cancel->setSoapHeaderSecurity($Security);
/**
 * Sample call for cancelShipment operation/method
 */
if ($cancel->cancelShipment(new \Minioak\Royalmail\Shipping\Structs\CancelShipmentRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Request ServiceType
 */
$request = new \Minioak\Royalmail\Shipping\Services\Request($options);
$request->setSoapHeaderSecurity($Security);
/**
 * Sample call for request1DRanges operation/method
 */
if ($request->request1DRanges(new \Minioak\Royalmail\Shipping\Structs\Request1DRangesRequest()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Sample call for request2DItemIDRange operation/method
 */
if ($request->request2DItemIDRange(new \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeRequest()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
