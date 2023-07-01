<?php

$contents = file_get_contents('test.jpg');


$file_name = $contents;   
$temp_file_location = $contents; 




// Step 1 - Scan for viruses with Cloudmersive Virus Scan

require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'API-KEY-HERE');



$apiInstance = new Swagger\Client\Api\ImageOcrApi(
    new GuzzleHttp\Client(  array('verify'          => false)  ),
    $config
);
$input_file = $temp_file_location; // \SplFileObject | Input file to perform the operation on.

$recognition_mode = "Advanced";
$language = "ENG";
$preprocessing = "Auto";

$result = $apiInstance->imageOcrPost($input_file, $recognition_mode, $language, $preprocessing);



file_put_contents("php://output", $result);

?>