Scryfall.com API Client
========

[![Build Status](https://scrutinizer-ci.com/g/viktoras25/scryfall/badges/build.png?b=master)](https://scrutinizer-ci.com/g/viktoras25/scryfall/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/viktoras25/scryfall/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/viktoras25/scryfall/?branch=master)

Installation
--------

`composer require viktoras\scryfall`

Usage
--------
You need a [PSR-18](https://www.php-fig.org/psr/psr-18/) compatible HTTP Client (e.g. [php-http/curl-client](https://github.com/php-http/curl-client))
and a [PSR-17](https://www.php-fig.org/psr/psr-17/) compatible RequestFactory (e.g. [Nyholm/psr7](https://github.com/Nyholm/psr7)).


Example Request:
    
```php
use Http\Client\Curl\Client as HttpClient;
use Nyholm\Psr7\Factory\Psr17Factory as Psr17FactoryAlias;
use Viktoras\Scryfall\Client;

$baseUrl = 'https://api.scryfall.com/';

$client = new Client\Client(
    $baseUrl,
    new HttpClient(),
    new Psr17FactoryAlias()
);

$setsRequest = new Client\Request\Sets\SetsList();

/** @var Client\Response\Sets\SetsList $response */
$response = $client->request($setsRequest);

$sets = $response->getSets();
```

Tests
--------
There are some tests, although not many. You can invoke them using composer script: `composer run-script test`
