<?php

use Viktoras\Scryfall\Client;

require_once __DIR__ . '/../vendor/autoload.php';

$baseUrl = 'https://api.scryfall.com/';

$setRequest = new Client\Request\SetByCode('IKO');

$client = new Client\Client(
    $baseUrl,
    new \Http\Client\Curl\Client(),
    new \Http\Factory\Guzzle\RequestFactory()
);

/** @var Client\Response\SetByCode $response */
$response = $client->request($setRequest);

die(var_dump($response->getSet()));
