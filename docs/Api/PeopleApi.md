# Randomsymbols\Coinpaprika\PeopleApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPeopleById()**](PeopleApi.md#getPeopleById) | **GET** /people/{person_id} | Get person by ID |


## `getPeopleById()`

```php
getPeopleById($person_id): \Randomsymbols\Coinpaprika\Model\PersonById
```

Get person by ID

Returns information about a person with the specified ID, related to the cryptocurrency market. Using this endpoint you can get a description of the person, social media links, number of teams she or he is involved in and the positions in those teams.   **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\PeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$person_id = vitalik-buterin; // string

try {
    $result = $apiInstance->getPeopleById($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->getPeopleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |

### Return type

[**\Randomsymbols\Coinpaprika\Model\PersonById**](../Model/PersonById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
