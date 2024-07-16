# OpenAPIClient-php

Coinpaprika API delivers precise & frequently updated market data from the world of crypto: coin prices, volumes, market caps, ATHs, return rates and more.

# Introduction
If you want to use the Coinpaprika API, you have two main options: you can choose the API Free plan, which has sufficient limits for hobby and non-commercial use, or get one of the paid plans, ideal for commercial or professional use. To decide which plan is the best for you, check the [Plans and Pricing comparison](https://coinpaprika.com/api).

Depending on the selected plan, you should send requests to the appropriate base URL:

| Plan       | Base URL                            |
|------------|-------------------------------------|
| Free       | https://api.coinpaprika.com/v1/     |
| Starter    | https://api-pro.coinpaprika.com/v1/ |
| Pro        | https://api-pro.coinpaprika.com/v1/ |
| Business   | https://api-pro.coinpaprika.com/v1/ |
| Enterprise | https://api-pro.coinpaprika.com/v1/ |

# Authentication
If you use the Free plan, you don't need to set up an API key for each request. For other plans it is required. You can generate the API key in the Developer Portal after signing in.

To provide the API key in REST API calls, set the `Authorization` header:
```
Authorization: <api-key>
```

# Standards and conventions
## General

* All endpoints return either a JSON object or array
* All timestamp related fields are in seconds

## Errors
* API errors are formatted as JSON:
```{\"error\": \"<error message>\"}```
* The API uses standard HTTP status codes to indicate a request failure:
  * HTTP 4XX return codes are used for invalid requests - the issue is on the sender's side
  * HTTP 5XX return codes are used for internal errors - the issue is on the server's side

  | HTTP Status | Description |
  |---|---|
  | 400 Bad Request | The server could not process the request due to invalid request parameters or invalid format of the parameters. |
  | 402 Payment Required | The request could not be processed because of the user has an insufficient plan. If you want to be able to process this request, get a [higher plan](https://coinpaprika.com/api). |
  | 403 Forbidden | The request could not be processed due to invalid API key. |
  | 404 Not Found | The server could not process the request due to invalid URL or invalid path parameter. |
  | 429 Too Many Requests | The rate limit has been exceeded. Reduce the frequency of requests to avoid this error. |
  | 500 Internal Server Error | An unexpected server error has occured. |
  

# Rate limit
* The monthly number of requests is limited depending on the plan:
  | Plan       | Calls/month                         |
  |------------|-------------------------------------|
  | Free       | 20 000 |
  | Starter    | 200 000 |
  | Pro        | 500 000 |
  | Business   | 3 000 000 |
  | Enterprise | No limits |

# API Clients
We provide the API clients in several popular programming languages:
* [PHP](https://github.com/coinpaprika/coinpaprika-api-php-client)
* [NodeJS](https://github.com/coinpaprika/coinpaprika-api-nodejs-client)
* [GO](https://github.com/coinpaprika/coinpaprika-api-go-client)
* [Swift](https://github.com/coinpaprika/coinpaprika-api-swift-client)
* [Kotlin](https://github.com/coinpaprika/coinpaprika-api-kotlin-client)
* [Python](https://github.com/coinpaprika/coinpaprika-api-python-client)
* [Google Sheets](https://github.com/coinpaprika/coinpaprika-google-sheet)
* Community Contributed Clients:
  * [Rust](https://github.com/tokenomia-pro/coinpaprika-api-rust-client) built by <a href=\"https://tokenomia.pro/\" target=\"_blank\">tokenomia.pro</a>
  * [C#](https://github.com/MSiccDev/CoinpaprikaAPI)
  * [JS](https://github.com/jaggedsoft/coinpaprika-js)

**Note**: some of them may not be updated yet. We are working on improving them and they will be updated soon. If you'd like to contribute, please report issues and send PRs on Github.


# Terms of use
* [Download terms of use](https://coinpaprika.github.io/files/terms_of_use_v1.pdf)
# Archival documentations
* [API v1.2](https://api.coinpaprika.com/docs/1.2)
* [API v1.3](https://api.coinpaprika.com/docs/1.3)
* [API v1.4](https://api.coinpaprika.com/docs/1.4)
* [API v1.5](https://api.coinpaprika.com/docs/1.5)
* [API v1.6](https://api.coinpaprika.com/docs/1.6)
# Version history
## 1.7.8 - 2024.01.24
* Plan limits update
## 1.7.7 - 2023.06.07
* Added official Python client link
## v1.7.6 - 2023.04.12
* New intervals for OHLCV endpoint
## v1.7.5 - 2022.12.07
* Removed documentation for /beta/ endpoints
## v1.7.4 - 2022.09.19
* Key info endpoint
* Coin logo image URL
## v1.7.3 - 2022.09.08
* Plans update
## v1.7.2 - 2022.07.22
* Changelog endpoint documentation
## v1.7.1 - 2022.07.14
* Beta endpoints documentation
## v1.7.0 - 2022.05.06
* API-Pro documentation
## v1.6.1 - 2020.12.09
* Added information about first date with price data for currency ticker [/tickers](#operation/getTickers) and [/tickers/{coin_id}](#operation/getTickersById)
* Added redirect for historical tickers by contract address [/contracts/{platform_id}/{contract_address}/historical](#operation/getHistoricalTicker)
## v1.6.0 - 2020.10.27
* Added contracts section [/contracts](#operation/getPlatforms), [/contracts/{platform_id}](#operation/getContracts),
[/contracts/{platform_id}/{contract_address}](#operation/getTicker)



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/randomsymbols/coinpaprika.git"
    }
  ],
  "require": {
    "randomsymbols/coinpaprika": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Randomsymbols\Coinpaprika\Api\ChangelogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 2; // float | Results page number. The number of records in the response is 100

try {
    $result = $apiInstance->getChangelogIDs($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangelogApi->getChangelogIDs: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.coinpaprika.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChangelogApi* | [**getChangelogIDs**](docs/Api/ChangelogApi.md#getchangelogids) | **GET** /changelog/ids | Get id changelog for all coins
*CoinsApi* | [**coinsCoinIdEventsGet**](docs/Api/CoinsApi.md#coinscoinideventsget) | **GET** /coins/{coin_id}/events | Get coin events by coin ID
*CoinsApi* | [**coinsCoinIdExchangesGet**](docs/Api/CoinsApi.md#coinscoinidexchangesget) | **GET** /coins/{coin_id}/exchanges | Get exchanges by coin ID
*CoinsApi* | [**coinsCoinIdMarketsGet**](docs/Api/CoinsApi.md#coinscoinidmarketsget) | **GET** /coins/{coin_id}/markets | Get markets by coin ID
*CoinsApi* | [**coinsCoinIdOhlcvHistoricalGet**](docs/Api/CoinsApi.md#coinscoinidohlcvhistoricalget) | **GET** /coins/{coin_id}/ohlcv/historical | Get historical OHLC
*CoinsApi* | [**coinsCoinIdOhlcvLatestGet**](docs/Api/CoinsApi.md#coinscoinidohlcvlatestget) | **GET** /coins/{coin_id}/ohlcv/latest/ | Get OHLC for the last full day
*CoinsApi* | [**coinsCoinIdOhlcvTodayGet**](docs/Api/CoinsApi.md#coinscoinidohlcvtodayget) | **GET** /coins/{coin_id}/ohlcv/today/ | Get today OHLC
*CoinsApi* | [**coinsCoinIdTwitterGet**](docs/Api/CoinsApi.md#coinscoinidtwitterget) | **GET** /coins/{coin_id}/twitter | Get Twitter timeline tweets for a coin
*CoinsApi* | [**coinsGet**](docs/Api/CoinsApi.md#coinsget) | **GET** /coins | List coins
*CoinsApi* | [**getCoinById**](docs/Api/CoinsApi.md#getcoinbyid) | **GET** /coins/{coin_id} | Get coin by ID
*ContractsApi* | [**getContracts**](docs/Api/ContractsApi.md#getcontracts) | **GET** /contracts/{platform_id} | Get all contract addressess for a given platform
*ContractsApi* | [**getHistoricalTicker**](docs/Api/ContractsApi.md#gethistoricalticker) | **GET** /contracts/{platform_id}/{contract_address}/historical | Redirect to historical ticks by contract address
*ContractsApi* | [**getPlatforms**](docs/Api/ContractsApi.md#getplatforms) | **GET** /contracts | List contracts platforms
*ContractsApi* | [**getTicker**](docs/Api/ContractsApi.md#getticker) | **GET** /contracts/{platform_id}/{contract_address} | Redirect to Ticker by contract address
*DeprecatedApi* | [**tickerCoinIdGet**](docs/Api/DeprecatedApi.md#tickercoinidget) | **GET** /ticker/{coin_id} | Get ticker by ID [DEPRECATED]
*DeprecatedApi* | [**tickerGet**](docs/Api/DeprecatedApi.md#tickerget) | **GET** /ticker | Get ticker information for all coins [DEPRECATED]
*ExchangesApi* | [**exchangesExchangeIdMarketsGet**](docs/Api/ExchangesApi.md#exchangesexchangeidmarketsget) | **GET** /exchanges/{exchange_id}/markets | List an exchange markets
*ExchangesApi* | [**getExchangeByID**](docs/Api/ExchangesApi.md#getexchangebyid) | **GET** /exchanges/{exchange_id} | Get exchange by ID
*ExchangesApi* | [**getExchanges**](docs/Api/ExchangesApi.md#getexchanges) | **GET** /exchanges | List exchanges
*GlobalApi* | [**globalGet**](docs/Api/GlobalApi.md#globalget) | **GET** /global | Get market overview data
*KeyApi* | [**keyInfoGet**](docs/Api/KeyApi.md#keyinfoget) | **GET** /key/info | Get API key info
*PeopleApi* | [**getPeopleById**](docs/Api/PeopleApi.md#getpeoplebyid) | **GET** /people/{person_id} | Get person by ID
*TagsApi* | [**tagsGet**](docs/Api/TagsApi.md#tagsget) | **GET** /tags | List tags
*TagsApi* | [**tagsTagIdGet**](docs/Api/TagsApi.md#tagstagidget) | **GET** /tags/{tag_id} | Get tag by ID
*TickersApi* | [**getTickers**](docs/Api/TickersApi.md#gettickers) | **GET** /tickers | Get tickers for all active coins
*TickersApi* | [**getTickersById**](docs/Api/TickersApi.md#gettickersbyid) | **GET** /tickers/{coin_id} | Get ticker for a specific coin
*TickersApi* | [**getTickersHistoricalById**](docs/Api/TickersApi.md#gettickershistoricalbyid) | **GET** /tickers/{coin_id}/historical | Get historical ticks for a specific coin
*ToolsApi* | [**priceConverterGet**](docs/Api/ToolsApi.md#priceconverterget) | **GET** /price-converter | Price converter
*ToolsApi* | [**searchGet**](docs/Api/ToolsApi.md#searchget) | **GET** /search | Search

## Models

- [CoinAndPosition](docs/Model/CoinAndPosition.md)
- [CoinExtended](docs/Model/CoinExtended.md)
- [CoinLinks](docs/Model/CoinLinks.md)
- [CoinMarket](docs/Model/CoinMarket.md)
- [CoinsOhlcv](docs/Model/CoinsOhlcv.md)
- [Contract](docs/Model/Contract.md)
- [Contract1](docs/Model/Contract1.md)
- [Currency](docs/Model/Currency.md)
- [CurrentMonth](docs/Model/CurrentMonth.md)
- [Event](docs/Model/Event.md)
- [Exchange](docs/Model/Exchange.md)
- [ExchangeLinks](docs/Model/ExchangeLinks.md)
- [ExchangeSimplified](docs/Model/ExchangeSimplified.md)
- [ExchangeWithShare](docs/Model/ExchangeWithShare.md)
- [HistoricalTick](docs/Model/HistoricalTick.md)
- [IcoProject](docs/Model/IcoProject.md)
- [IdChangelog](docs/Model/IdChangelog.md)
- [IdNotFoundError](docs/Model/IdNotFoundError.md)
- [Info](docs/Model/Info.md)
- [LinkExtended](docs/Model/LinkExtended.md)
- [LinkWithFollowers](docs/Model/LinkWithFollowers.md)
- [Market](docs/Model/Market.md)
- [MarketQuote](docs/Model/MarketQuote.md)
- [MarketQuotes](docs/Model/MarketQuotes.md)
- [ModelGlobal](docs/Model/ModelGlobal.md)
- [Person](docs/Model/Person.md)
- [PersonById](docs/Model/PersonById.md)
- [PersonLinks](docs/Model/PersonLinks.md)
- [PersonWithPosition](docs/Model/PersonWithPosition.md)
- [PriceConverterResponse](docs/Model/PriceConverterResponse.md)
- [Quote](docs/Model/Quote.md)
- [Quote1](docs/Model/Quote1.md)
- [Quotes1](docs/Model/Quotes1.md)
- [SearchResults](docs/Model/SearchResults.md)
- [Tag](docs/Model/Tag.md)
- [TagSimplified](docs/Model/TagSimplified.md)
- [Tick](docs/Model/Tick.md)
- [TickDeprecated](docs/Model/TickDeprecated.md)
- [TooManyRequestsError](docs/Model/TooManyRequestsError.md)
- [Twitter](docs/Model/Twitter.md)
- [Usage](docs/Model/Usage.md)
- [Whitepaper](docs/Model/Whitepaper.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.7.8`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
