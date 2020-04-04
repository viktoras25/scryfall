<?php

use Viktoras\Scryfall\Client;

require_once __DIR__ . '/../vendor/autoload.php';

$baseUrl = 'https://api.scryfall.com/';

$setsRequest = new Client\Request\SetsList();

$client = new Client\Client(
    $baseUrl,
    new \Http\Client\Curl\Client(),
    new \Http\Factory\Guzzle\RequestFactory()
);

/** @var Client\Response\SetsList $response */
$response = $client->request($setsRequest);

$sets = $response->getSets();
