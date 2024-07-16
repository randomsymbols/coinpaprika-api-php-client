# Randomsymbols\Coinpaprika\CoinsApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**coinsCoinIdEventsGet()**](CoinsApi.md#coinsCoinIdEventsGet) | **GET** /coins/{coin_id}/events | Get coin events by coin ID |
| [**coinsCoinIdExchangesGet()**](CoinsApi.md#coinsCoinIdExchangesGet) | **GET** /coins/{coin_id}/exchanges | Get exchanges by coin ID |
| [**coinsCoinIdMarketsGet()**](CoinsApi.md#coinsCoinIdMarketsGet) | **GET** /coins/{coin_id}/markets | Get markets by coin ID |
| [**coinsCoinIdOhlcvHistoricalGet()**](CoinsApi.md#coinsCoinIdOhlcvHistoricalGet) | **GET** /coins/{coin_id}/ohlcv/historical | Get historical OHLC |
| [**coinsCoinIdOhlcvLatestGet()**](CoinsApi.md#coinsCoinIdOhlcvLatestGet) | **GET** /coins/{coin_id}/ohlcv/latest/ | Get OHLC for the last full day |
| [**coinsCoinIdOhlcvTodayGet()**](CoinsApi.md#coinsCoinIdOhlcvTodayGet) | **GET** /coins/{coin_id}/ohlcv/today/ | Get today OHLC |
| [**coinsCoinIdTwitterGet()**](CoinsApi.md#coinsCoinIdTwitterGet) | **GET** /coins/{coin_id}/twitter | Get Twitter timeline tweets for a coin |
| [**coinsGet()**](CoinsApi.md#coinsGet) | **GET** /coins | List coins |
| [**getCoinById()**](CoinsApi.md#getCoinById) | **GET** /coins/{coin_id} | Get coin by ID |


## `coinsCoinIdEventsGet()`

```php
coinsCoinIdEventsGet($coin_id): \Randomsymbols\Coinpaprika\Model\Event[]
```

Get coin events by coin ID

Returns events for a given coin.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string

try {
    $result = $apiInstance->coinsCoinIdEventsGet($coin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdExchangesGet()`

```php
coinsCoinIdExchangesGet($coin_id): \Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]
```

Get exchanges by coin ID

Returns exchanges where a given coin is traded.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string

try {
    $result = $apiInstance->coinsCoinIdExchangesGet($coin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdExchangesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]**](../Model/ExchangeWithShare.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdMarketsGet()`

```php
coinsCoinIdMarketsGet($coin_id, $quotes): \Randomsymbols\Coinpaprika\Model\CoinMarket[]
```

Get markets by coin ID

Returns all available markets for a given coin.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->coinsCoinIdMarketsGet($coin_id, $quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\CoinMarket[]**](../Model/CoinMarket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdOhlcvHistoricalGet()`

```php
coinsCoinIdOhlcvHistoricalGet($coin_id, $start, $end, $limit, $interval, $quote): \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]
```

Get historical OHLC

Returns Open/High/Low/Close values with volume and market capitalization for any date range. If the `end` date is the current day, data can change with every request until actual close of the day at 23:59:59\"  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Maximum time range of data available to fetch depending on the plan:**  | Plan       | Time range                         | |------------|-------------------------------------| | Free       | Last 24 hours | | Starter    | Last 30 days | | Pro        | Last 90 days | | Business   | Last 365 days | | Enterprise | No limits |  **The default interval of returned data for OHLCV is 24 hours:** ``` [   {     \"time_open\": \"2020-01-01T00:00:00Z\",     \"time_close\": \"2020-01-01T23:59:59Z\",     \"open\": ...,     \"high\": ...,     \"low\": ...,     \"close\": ...,     \"volume\": ...,     \"market_cap\": ...   }   ... ] ```  **However, depending on your API plan, you can set a smaller interval by using the query parameter `interval`:**  | Plan       | `interval` parameter value          | |------------|-------------------------------------| | Free       | `24h` | | Starter    | `24h` | | Pro        | `24h` | | Business   | `1h`, `6h`, `12h`, `24h` | | Enterprise | `15m`, `30m`, `1h`, `6h`, `12h`, `24h` |  **Update interval:** Every 15 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$start = 'start_example'; // string | start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`    - Simple date (yyyy-mm-dd) eg. `2018-02-15`    - Unix timestamp (in seconds) eg. `1518671700`
$end = 'end_example'; // string | end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`    - Simple date (yyyy-mm-dd) eg. `2018-02-15`    - Unix timestamp (in seconds) eg. `1518671700`   If not provided calculated by the limit parameter
$limit = 1; // int | limit of result rows (max `366`)
$interval = '24h'; // string | returned OHLCV point interval (available values: `15m`, `30m`, `1h`, `6h`, `12h`, `24h`)
$quote = 'usd'; // string | returned data quote (available values: `usd` `btc`)

try {
    $result = $apiInstance->coinsCoinIdOhlcvHistoricalGet($coin_id, $start, $end, $limit, $interval, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdOhlcvHistoricalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **start** | **string**| start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; | |
| **end** | **string**| end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter | [optional] |
| **limit** | **int**| limit of result rows (max &#x60;366&#x60;) | [optional] [default to 1] |
| **interval** | **string**| returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) | [optional] [default to &#39;24h&#39;] |
| **quote** | **string**| returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) | [optional] [default to &#39;usd&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]**](../Model/CoinsOhlcv.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdOhlcvLatestGet()`

```php
coinsCoinIdOhlcvLatestGet($coin_id, $quote): \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]
```

Get OHLC for the last full day

Returns Open/High/Low/Close values with volume and market capitalization for the last full day.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$quote = 'usd'; // string | returned data quote (available values: `usd` `btc`)

try {
    $result = $apiInstance->coinsCoinIdOhlcvLatestGet($coin_id, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdOhlcvLatestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **quote** | **string**| returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) | [optional] [default to &#39;usd&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]**](../Model/CoinsOhlcv.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdOhlcvTodayGet()`

```php
coinsCoinIdOhlcvTodayGet($coin_id, $quote): \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]
```

Get today OHLC

Returns Open/High/Low/Close values with volume and market capitalization for the current day. Data can change every each request until actual close of the day at 23:59:59.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 5 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$quote = 'usd'; // string | returned data quote (available values: `usd` `btc`)

try {
    $result = $apiInstance->coinsCoinIdOhlcvTodayGet($coin_id, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdOhlcvTodayGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **quote** | **string**| returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) | [optional] [default to &#39;usd&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]**](../Model/CoinsOhlcv.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsCoinIdTwitterGet()`

```php
coinsCoinIdTwitterGet($coin_id): \Randomsymbols\Coinpaprika\Model\Twitter[]
```

Get Twitter timeline tweets for a coin

Returns the last 50 timeline tweets from the official Twitter profile for a given coin.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string

try {
    $result = $apiInstance->coinsCoinIdTwitterGet($coin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsCoinIdTwitterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Twitter[]**](../Model/Twitter.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coinsGet()`

```php
coinsGet(): \Randomsymbols\Coinpaprika\Model\Currency[]
```

List coins

Returns basic information about cryptocurrencies on coinpaprika.com: * identity (`id`, `name`, `symbol`) * ranking (`rank`) * activity status (`is_active`) * type of cryptocurrency (`type`) - `coin` or `token` * information whether the currency is new (`is_new`) - true if the currency was added within the last 5 days  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->coinsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->coinsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Randomsymbols\Coinpaprika\Model\Currency[]**](../Model/Currency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoinById()`

```php
getCoinById($coin_id): \Randomsymbols\Coinpaprika\Model\CoinExtended
```

Get coin by ID

Returns detailed descriptive information about a single coin, without price or volume data. For price data, check the [/tickers](#operation/getTickers) and [/tickers/{coin_id}](#operation/getTickersById) endpoints.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\CoinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string

try {
    $result = $apiInstance->getCoinById($coin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoinsApi->getCoinById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\CoinExtended**](../Model/CoinExtended.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
