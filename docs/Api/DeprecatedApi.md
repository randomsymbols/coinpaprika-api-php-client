# Randomsymbols\Coinpaprika\DeprecatedApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tickerCoinIdGet()**](DeprecatedApi.md#tickerCoinIdGet) | **GET** /ticker/{coin_id} | Get ticker by ID [DEPRECATED] |
| [**tickerGet()**](DeprecatedApi.md#tickerGet) | **GET** /ticker | Get ticker information for all coins [DEPRECATED] |


## `tickerCoinIdGet()`

```php
tickerCoinIdGet($coin_id): \Randomsymbols\Coinpaprika\Model\TickDeprecated
```

Get ticker by ID [DEPRECATED]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\DeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin_id = btc-bitcoin; // string

try {
    $result = $apiInstance->tickerCoinIdGet($coin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedApi->tickerCoinIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\TickDeprecated**](../Model/TickDeprecated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tickerGet()`

```php
tickerGet(): \Randomsymbols\Coinpaprika\Model\TickDeprecated[]
```

Get ticker information for all coins [DEPRECATED]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\DeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tickerGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedApi->tickerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Randomsymbols\Coinpaprika\Model\TickDeprecated[]**](../Model/TickDeprecated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
