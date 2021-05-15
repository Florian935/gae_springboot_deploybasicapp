<?php
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://tp3-springboot.uc.r.appspot.com'
]);

$responseBook = $client->request('GET', '/books');
$bodyBook = $responseBook->getBody();
$arr_body = json_decode($bodyBook);
print_r($arr_body);
echo("Status code: " . $responseBook->getStatusCode());
echo nl2br("     \n");
echo nl2br("\n");
echo ("Content type: " . $responseBook->getHeader('content-type')[0]);
echo nl2br("     \n");


$responseHello= $client->request('GET', '/hello');
$bodyHello = $responseHello->getBody();
echo nl2br($bodyHello . "     \n");
echo("Status code: " . $responseHello->getStatusCode());

