<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 3:27 PM
 */

namespace src;


class Utils
{

    public static function getConfig($data = array())
    {
        $config_array = null;

        $ini_file = realpath(dirname(__FILE__)) . '/payfac_SDK_config.ini';

        if (!file_exists($ini_file)) {
            throw new PayFacExceptions("Could not fetch config file. Please check the config file or run Setup.php.");
        }

        @$config_array = parse_ini_file('payfac_SDK_config.ini');


        if (empty($config_array)) {
            $config_array = array();
        }

        $names = explode(',', CONFIG_LIST);
        foreach ($names as $name) {
            if (isset($data[$name])) {
                $config[$name] = $data[$name];

            } else {
                if ($name == 'timeout') {
                    $config['timeout'] = isset($config_array['timeout']) ? $config_array['timeout'] : '5000';
                } else {
                    if ((!isset($config_array[$name])) and (($name != 'proxyHost') or ($name != 'proxyPort')) ) {
                        throw new \InvalidArgumentException("Missing Field /$name/");
                    }
                    $config[$name] = $config_array[$name];
                }
            }
        }

        return $config;
    }

    public static function generateResponseObject($data, $useSimpleXml)
    {
        if ($useSimpleXml) {
            $respObj = simplexml_load_string($data);
        } else {
            $respObj = XmlParser::domParser($data);
        }

        return $respObj;
    }

    public static function printToConsole($prefixMessage, $message, $printXml, $neuterXml = false)
    {
        if ($neuterXml) {
            $message = self::neuterString($message);
        }

        if ($printXml) {
            echo "\n" . $prefixMessage . $message;
        }
    }
}