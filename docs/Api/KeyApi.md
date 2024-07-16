# Randomsymbols\Coinpaprika\KeyApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**keyInfoGet()**](KeyApi.md#keyInfoGet) | **GET** /key/info | Get API key info |


## `keyInfoGet()`

```php
keyInfoGet(): \Randomsymbols\Coinpaprika\Model\Info
```

Get API key info

Returns API key information: * Name of the API key plan * When the plan started * A flag indicating if the plan is active * Link to the API user portal * Monthly usage  **Available on the following API plans:** - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\KeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->keyInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyApi->keyInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Randomsymbols\Coinpaprika\Model\Info**](../Model/Info.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
