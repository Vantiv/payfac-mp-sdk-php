<?php
/**
 * Created by PhpStorm.
 * User: kdave
 * Date: 9/13/18
 * Time: 3:27 PM
 */

namespace src\utils;
use DOMDocument;
use PEAR;
use XML_Serializer;
use XML_Unserializer;

define('CURRENT_XML_VERSION', '13.1.0');
define('CURRENT_SDK_VERSION', 'PHP;13.1.0');
define('CONFIG_LIST', 'username,password,url,proxy,printXml,neuterXml,timeout');
define('CONTENT_TYPE', 'application/com.vantivcnp.payfac-v13.1+xml');
define('ACCEPT', 'application/com.vantivcnp.payfac-v13.1+xml');

class Utils
{

    public static function getConfig($data = array())
    {
        $config_array = null;

        $ini_file = realpath(dirname(__FILE__)) . '/../MP_SDK_config.ini';

        if (!file_exists($ini_file)) {
            throw new PayFacExceptions("Could not fetch config file. Please check the config file or run Setup.php.");
        }

        @$config_array = parse_ini_file($ini_file);


        if (empty($config_array)) {
            //print "config array is empty";
            $config_array = array();
        }

        $names = explode(',', CONFIG_LIST);
        //print "printing names\n";
        foreach ($names as $name) {



            if (isset($data[$name])) {
                $config[$name] = $data[$name];
                print $name."\t".$config[$name]."\n";

            } else {
                if ($name == 'timeout') {
                    $config['timeout'] = isset($config_array['timeout']) ? $config_array['timeout'] : '5000';
                } else {
                    if ((!isset($config_array[$name])) and (($name != 'proxyHost') or ($name != 'proxyPort')) ) {
                        throw new \InvalidArgumentException("Missing Field /$name/");
                    }
                    $config[$name] = $config_array[$name];
                    //print $name."\t".$config[$name]."\n";
                }
            }
        }

        return $config;
    }

    public static function get_requestbody_from_xml($className, $object){

        $root_attributes = array();
        $root_attributes['xmlns'] = 'http://payfac.vantivcnp.com/api/merchant/onboard';

        $options = array(
            'rootName'            => $className,
            'indent'               => '    ',
            'linebreak'           => "\n",
            'ignoreNull'          => true,
            'classAsTagName' => $className,
            'addDecl'     => true,
            'encoding'         => 'utf-8',
            'rootAttributes'         => $root_attributes
        );

        $serializer = new XML_Serializer($options);

        $serializer->setOption(XML_SERIALIZER_OPTION_SCALAR_AS_ATTRIBUTES, array(
            "fraud" => array("enabled"),
            "amexAcquired" => array("enabled"),
            "eCheck" =>array("enabled"),
            "subMerchantFunding" =>array("enabled")
        ));

        $result = $serializer->serialize($object);


        if ($result === true) {
            $xml = $serializer->getSerializedData();
            //replace the header with standalone attribute
            $request_body = str_replace("<?xml version=\"1.0\" encoding=\"utf-8\"?>", "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>",$xml);
            return $request_body;
        }

    }

    public static function generateResponseObject($xml)
    {
        $unserializer = new XML_Unserializer();

        $status = $unserializer->unserialize($xml);
        if (PEAR::isError($status)) {
            echo 'Error: ' . $status->getMessage();
            return;
        } else {
            $data = $unserializer->getUnserializedData();
        }
        return $data;
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

    public static function validateXML($request){
        $xml = new DOMDocument();
        $xml->loadXML($request);
        $filepath =  __DIR__."/../schema/merchant-onboard-api-v13.1.xsd";
        return $xml->schemaValidate( $filepath);
    }

    public static function convertDateTime($data){

        $pattern = array();
        $pattern[0] = "(<date>(.*)</date>)";
        $pattern[1] = "(<timezone_type>(.*)</timezone_type>)";
        $pattern[2] = "(<timezone>(.*)</timezone>)";

        preg_match_all($pattern[0], $data, $matches0, PREG_OFFSET_CAPTURE);
        preg_match_all($pattern[1], $data, $matches1, PREG_OFFSET_CAPTURE);
        preg_match_all($pattern[2], $data, $matches2, PREG_OFFSET_CAPTURE);

        $count = 0;
        foreach($matches0[0] as $match){

            $date = substr($matches0[1][$count][0],0,10);
            $time = substr($matches0[1][$count][0],11);
            $timezone = str_replace("<timezone>",".",$matches2[0][$count][0]);
            $timezone = str_replace("</timezone>","",$timezone);
            $timezone_new = substr($timezone,"1");

            $newDateTime = $date."T".$time.$timezone_new;

            $data = str_replace($match[0],"##REPLACE##",$data);
            $data = str_replace($matches1[0][$count][0],'',$data);
            $data = str_replace($matches2[0][$count][0],'',$data);

            $regex = "/>[\s]*##REPLACE##[\s]*</";
            preg_match($regex,$data,$replace_match);

            $data = str_replace($replace_match,">".$newDateTime."<",$data);
            $count++;
        }

        return $data;

    }

    public static function appendVersionInfo($request) {
        $versionInfo = explode(";", CURRENT_SDK_VERSION);
        $sdkVersion = $versionInfo[1];
        $language = strtolower($versionInfo[0]);


        //Hack to get around the fact that requests can come as array or object
        if(is_array($request)){
            $request["sdkVersion"] = $sdkVersion;
            $request["language"] = $language;
        }
        
        else if(is_object($request)){
            $request->setSdkVersion($sdkVersion);
            $request->setLanguage($language);
        }
    }
}
