# Randomsymbols\Coinpaprika\ChangelogApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getChangelogIDs()**](ChangelogApi.md#getChangelogIDs) | **GET** /changelog/ids | Get id changelog for all coins |


## `getChangelogIDs()`

```php
getChangelogIDs($page): array[]
```

Get id changelog for all coins

Returns coin id changes made by coinpaprika.com moderators: * `currency_id` - current id of a coin * `old_id` - old coin id that has been replaced with a new one * `new_id` - new coin id that replaced the old one * `changed_at` - date of the change  **Available on the following API plans:** - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **float**| Results page number. The number of records in the response is 100 | [optional] [default to 1] |

### Return type

**array[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
