# Randomsymbols\Coinpaprika\GlobalApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**globalGet()**](GlobalApi.md#globalGet) | **GET** /global | Get market overview data |


## `globalGet()`

```php
globalGet(): \Randomsymbols\Coinpaprika\Model\ModelGlobal
```

Get market overview data

Returns current cryptocurrencies market overview metrics, such as: * Global market capitalization * Total 24h volume of all cryptocurrencies * Number of active cryptocurrencies on coinpaprika.com * ATH of 24h volume and market capitalization * and more  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 5 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\GlobalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->globalGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalApi->globalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Randomsymbols\Coinpaprika\Model\ModelGlobal**](../Model/ModelGlobal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
