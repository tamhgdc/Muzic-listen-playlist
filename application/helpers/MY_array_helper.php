<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: hungna
 * Date: 3/29/2017
 * Time: 1:54 PM
 */
if (!function_exists('arrayToObject'))
{
    /**
     * Convert Array to Object
     *
     * @param array $array
     * @return array|bool|stdClass
     */
    function arrayToObject($array = array())
    {
        if (!is_array($array))
        {
            return $array;
        }
        $object = new stdClass();
        if (is_array($array) && count($array) > 0)
        {
            foreach ($array as $name => $value)
            {
                $name = trim($name);
                if (!empty($name))
                {
                    $object->$name = arrayToObject($value);
                }
            }
            return $object;
        }
        return false;
    }
}
if (!function_exists('arrayToXml'))
{
    /**
     * Convert Array to XML
     *
     * @param array $array
     * @param string $namespace
     * @param null $file_output
     * @return mixed|null
     */
    function arrayToXml($array = array(), $namespace = '', $file_output = null)
    {
        $xml_object = new SimpleXMLElement("<?xml version=\"1.0\"?><{$namespace}></{$namespace}>"); // creating object of SimpleXMLElement
        convertArrayToXml($array, $xml_object); // function call to convert array to xml
        $xml_file = $file_output !== null ? $xml_object->asXML($file_output) : $xml_object->asXML(); // saving generated xml file
        return $xml_file ? $xml_file : null;
    }
}
if (!function_exists('convertArrayToXml'))
{
    /**
     * convert Array To Xml use Simple XML
     * @param $array
     * @param $SimpleXMLElement
     */
    function convertArrayToXml($array, &$SimpleXMLElement)
    {
        foreach ($array as $key => $value)
        {
            if (is_array($value))
            {
                if (!is_numeric($key))
                {
                    $subnode = $SimpleXMLElement->addChild("$key");
                    convertArrayToXml($value, $subnode);
                }
                else
                {
                    $subnode = $SimpleXMLElement->addChild("item$key");
                    convertArrayToXml($value, $subnode);
                }
            }
            else
            {
                $SimpleXMLElement->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
}
