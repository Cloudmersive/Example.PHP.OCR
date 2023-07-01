<?php

//$contents = file_get_contents('test.jpg');


$file_name = 'C:\\temp\\test.jpg';   
$temp_file_location = 'C:\\temp\\test.jpg'; 




// Step 1 - Scan for viruses with Cloudmersive Virus Scan

require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'b5506287-f303-4cf5-853c-712afe75291f');



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