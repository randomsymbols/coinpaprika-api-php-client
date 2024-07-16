# Randomsymbols\Coinpaprika\ExchangesApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangesExchangeIdMarketsGet()**](ExchangesApi.md#exchangesExchangeIdMarketsGet) | **GET** /exchanges/{exchange_id}/markets | List an exchange markets |
| [**getExchangeByID()**](ExchangesApi.md#getExchangeByID) | **GET** /exchanges/{exchange_id} | Get exchange by ID |
| [**getExchanges()**](ExchangesApi.md#getExchanges) | **GET** /exchanges | List exchanges |


## `exchangesExchangeIdMarketsGet()`

```php
exchangesExchangeIdMarketsGet($exchange_id, $quotes): \Randomsymbols\Coinpaprika\Model\Market[]
```

List an exchange markets

Returns list of all available markets on a given exchange on coinpaprika.com: * base, quote coin names/symbols, market url * market type * activity and outlier status * price and volume * etc.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = binance; // string
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->exchangesExchangeIdMarketsGet($exchange_id, $quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->exchangesExchangeIdMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**|  | |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Market[]**](../Model/Market.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeByID()`

```php
getExchangeByID($exchange_id, $quotes): \Randomsymbols\Coinpaprika\Model\Exchange
```

Get exchange by ID

Returns basic information about a given exchange on coinpaprika.com: * identity (`id`, `name`) * ranking * activity status * number of currencies, markets * volumes * etc.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = binance; // string
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->getExchangeByID($exchange_id, $quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->getExchangeByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**|  | |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Exchange**](../Model/Exchange.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchanges()`

```php
getExchanges($quotes): \Randomsymbols\Coinpaprika\Model\Exchange[]
```

List exchanges

Returns basic information about exchanges on coinpaprika.com: * identity (`id`, `name`) * ranking * activity status * number of currencies, markets * volumes * etc.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->getExchanges($quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->getExchanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Exchange[]**](../Model/Exchange.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
