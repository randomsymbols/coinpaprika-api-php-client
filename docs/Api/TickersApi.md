# Randomsymbols\Coinpaprika\TickersApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTickers()**](TickersApi.md#getTickers) | **GET** /tickers | Get tickers for all active coins |
| [**getTickersById()**](TickersApi.md#getTickersById) | **GET** /tickers/{coin_id} | Get ticker for a specific coin |
| [**getTickersHistoricalById()**](TickersApi.md#getTickersHistoricalById) | **GET** /tickers/{coin_id}/historical | Get historical ticks for a specific coin |


## `getTickers()`

```php
getTickers($quotes): \Randomsymbols\Coinpaprika\Model\Tick[]
```

Get tickers for all active coins

Returns price data of all active cryptocurrencies on coinpaprika.com: * identity (`id`, `name`, `symbol`) * ranking (`rank`) * supplies (`circulating_supply`, `total_supply`, `max_supply`) * [beta coefficient](https://www.investopedia.com/terms/b/beta.asp) (`beta_value`) * price data in a given currency (price, volumes, market cap, price changes, ath)  **Available on the following API plans:** - Free - there is no `circulating supply` field in the Free plan. If you need this field, use another API plan. - Starter - Pro - Business - Enterprise  **Maximum number of assets returned depending on the selected API plan:**  | Plan       | Assets                         | |------------|-------------------------------------| | Free       | 2000 | | Starter    | No limits | | Pro        | No limits | | Business   | No limits | | Enterprise | No limits |  **Update interval:**  - 3 minutes for Starter, Pro, Business, Enterprise plans - On average 5 minutes for Free

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\TickersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->getTickers($quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TickersApi->getTickers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Tick[]**](../Model/Tick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickersById()`

```php
getTickersById($coin_id, $quotes): \Randomsymbols\Coinpaprika\Model\Tick
```

Get ticker for a specific coin

Returns price data of a single cryptocurrency on coinpaprika.com: * identity (`id`, `name`, `symbol`) * ranking (`rank`) * supplies (`circulating_supply`, `total_supply`, `max_supply`) * [beta coefficient](https://www.investopedia.com/terms/b/beta.asp) (`beta_value`) * price data in a given currency (price, volumes, market cap, price changes, ath)  **Available on the following API plans:** - Free - there is no `circulating supply` field in the Free plan. If you need this field, use another API plan. - Starter - Pro - Business - Enterprise  **Update interval:**  - 3 minutes for Starter, Pro, Business, Enterprise plans - On average 5 minutes for Free

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\TickersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$quotes = USD,BTC; // string | Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK

try {
    $result = $apiInstance->getTickersById($coin_id, $quotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TickersApi->getTickersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **quotes** | **string**| Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK | [optional] [default to &#39;USD&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Tick**](../Model/Tick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickersHistoricalById()`

```php
getTickersHistoricalById($coin_id, $start, $end, $limit, $quote, $interval): \Randomsymbols\Coinpaprika\Model\HistoricalTick[]
```

Get historical ticks for a specific coin

Returns historical values of `price`, `volume_24h`, `market_cap` for a given cryptocurrency on coinpaprika.com:  **Available history range depending on the selected API plan:**  | Interval | `interval` param values | Free | Starter | Pro | Business | Enterprise | |---|---|---|---|---|---|---| | Daily | `24h`, `1d`, `7d`, `14d`, `30d`, `90d`, `365d` | last 1 year | last 5 years | unlimited | unlimited | unlimited | | Hourly | `1h`, `2h`, `3h`, `6h`, `12h` | last 1 day | last 30 days | last 90 days | last 365 days | unlimited | | 5-minute | `5m`, `10m`, `15m`, `30m`, `45m` | none | last 7 days | last 30 days | last 365 days | unlimited |  **Update interval:** Every 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\TickersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string
$start = 'start_example'; // string | start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`    - Simple date (yyyy-mm-dd) eg. `2018-02-15`    - Unix timestamp (in seconds) eg. `1518671700`
$end = 'NOW'; // string | end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`  - Simple date (yyyy-mm-dd) eg. `2018-02-15`  - Unix timestamp (in seconds) eg. `1518671700`
$limit = 1000; // int | limit of result rows (max `5000`)
$quote = 'usd'; // string | returned data quote (available values: `usd` `btc`)
$interval = '5m'; // string | returned points interval (available values: `5m` `10m` `15m` `30m` `45m` `1h` `2h` `3h` `6h` `12h` `24h` `1d` `7d` `14d` `30d` `90d` `365d`)

try {
    $result = $apiInstance->getTickersHistoricalById($coin_id, $start, $end, $limit, $quote, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TickersApi->getTickersHistoricalById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |
| **start** | **string**| start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; | |
| **end** | **string**| end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; | [optional] [default to &#39;NOW&#39;] |
| **limit** | **int**| limit of result rows (max &#x60;5000&#x60;) | [optional] [default to 1000] |
| **quote** | **string**| returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) | [optional] [default to &#39;usd&#39;] |
| **interval** | **string**| returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) | [optional] [default to &#39;5m&#39;] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\HistoricalTick[]**](../Model/HistoricalTick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
