<?php
/**
 * Created by PhpStorm.
 * User: araju
 * Date: 9/18/18
 * Time: 10:50 AM
 */

namespace src\utils;


class XmlParser
{
    public static function domParser($xml)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        return $doc;
    }

    // Returns the first DOMNode associated with the given tag name in the xml
    public static function getNodeByTagName($dom, $elementName)
    {
        return $dom->getElementsByTagName($elementName)->item(0);
    }

    // Returns the DOMNodeList associated with the given tag name in the xml
    public static function getNodeListByTagName($dom, $elementName)
    {
        return $dom->getElementsByTagName($elementName);
    }

    // Returns the value associated with the given tag name in the xml
    public static function getValueByTagName($dom, $elementName)
    {
        return $dom->getElementsByTagName($elementName)->item(0)->nodeValue;
    }

    // Returns the array of values associated with the given tag name in the xml
    public static function getValueListByTagName($dom, $elementName)
    {
        $nodeList = $dom->getElementsByTagName($elementName);
        $nodes = array();
        foreach($nodeList as $node) {
            $nodes[] = $node->nodeValue;
        }
        return $nodes;
    }

    // Returns the attribute by name, of the given tag name in the xml
    public static function getAttribute($dom, $elementName, $attributeName)
    {
        $attributes = $dom->getElementsByTagName($elementName)->item(0);
        return $attributes->getAttribute($attributeName);
    }

    public static function getDomDocumentAsString($dom)
    {
        return $dom->saveXML($dom);
    }
}