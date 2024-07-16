# Randomsymbols\Coinpaprika\ContractsApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContracts()**](ContractsApi.md#getContracts) | **GET** /contracts/{platform_id} | Get all contract addressess for a given platform |
| [**getHistoricalTicker()**](ContractsApi.md#getHistoricalTicker) | **GET** /contracts/{platform_id}/{contract_address}/historical | Redirect to historical ticks by contract address |
| [**getPlatforms()**](ContractsApi.md#getPlatforms) | **GET** /contracts | List contracts platforms |
| [**getTicker()**](ContractsApi.md#getTicker) | **GET** /contracts/{platform_id}/{contract_address} | Redirect to Ticker by contract address |


## `getContracts()`

```php
getContracts($platform_id): \Randomsymbols\Coinpaprika\Model\Contract1[]
```

Get all contract addressess for a given platform

Returns all available contracts for a given platform on coinpaprika.com.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$platform_id = eth_ethereum; // string

try {
    $result = $apiInstance->getContracts($platform_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Contract1[]**](../Model/Contract1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricalTicker()`

```php
getHistoricalTicker($platform_id, $contract_address, $start, $end, $limit, $quote, $interval)
```

Redirect to historical ticks by contract address

Returns [historical ticks](#operation/getTickersHistoricalById) for a contract with a given address.  **Check [historical ticks endpoint documentation](#operation/getTickersHistoricalById) to find out about the limitations for each API plan.**  **Update interval:** Every 5 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$platform_id = eth_ethereum; // string
$contract_address = 0xd26114cd6ee289accf82350c8d8487fedb8a0c07; // string
$start = 'start_example'; // string | start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`    - Simple date (yyyy-mm-dd) eg. `2018-02-15`    - Unix timestamp (in seconds) eg. `1518671700`
$end = 'NOW'; // string | end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. `2018-02-15T05:15:00Z`  - Simple date (yyyy-mm-dd) eg. `2018-02-15`  - Unix timestamp (in seconds) eg. `1518671700`
$limit = 1000; // int | limit of result rows (max `5000`)
$quote = 'usd'; // string | returned data quote (available values: `usd` `btc`)
$interval = '5m'; // string | returned points interval (available values: `5m` `10m` `15m` `30m` `45m` `1h` `2h` `3h` `6h` `12h` `24h` `1d` `7d` `14d` `30d` `90d` `365d`)

try {
    $apiInstance->getHistoricalTicker($platform_id, $contract_address, $start, $end, $limit, $quote, $interval);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getHistoricalTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform_id** | **string**|  | |
| **contract_address** | **string**|  | |
| **start** | **string**| start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; | |
| **end** | **string**| end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; | [optional] [default to &#39;NOW&#39;] |
| **limit** | **int**| limit of result rows (max &#x60;5000&#x60;) | [optional] [default to 1000] |
| **quote** | **string**| returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) | [optional] [default to &#39;usd&#39;] |
| **interval** | **string**| returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) | [optional] [default to &#39;5m&#39;] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlatforms()`

```php
getPlatforms(): string[]
```

List contracts platforms

Returns all available contract platforms on coinpaprika.com.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPlatforms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getPlatforms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicker()`

```php
getTicker($platform_id, $contract_address)
```

Redirect to Ticker by contract address

Returns [ticker](#operation/getTickersById) data for a contract with a given address.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 5 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$platform_id = eth_ethereum; // string
$contract_address = 0xd26114cd6ee289accf82350c8d8487fedb8a0c07; // string

try {
    $apiInstance->getTicker($platform_id, $contract_address);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform_id** | **string**|  | |
| **contract_address** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
