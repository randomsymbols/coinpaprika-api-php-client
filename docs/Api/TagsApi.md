# Randomsymbols\Coinpaprika\TagsApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tagsGet()**](TagsApi.md#tagsGet) | **GET** /tags | List tags |
| [**tagsTagIdGet()**](TagsApi.md#tagsTagIdGet) | **GET** /tags/{tag_id} | Get tag by ID |


## `tagsGet()`

```php
tagsGet($additional_fields): \Randomsymbols\Coinpaprika\Model\Tag[]
```

List tags

Returns basic information about cryptocurrencies tags (categories): * name * description * type of tag: `technical` or `functional` * number of coins with the tag * number of ICOs with the tag  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$additional_fields = coins,icos; // string | Comma separated list of additional fields to include in query result for each tag. Currently supported values are: \"coins\" and \"icos\".

try {
    $result = $apiInstance->tagsGet($additional_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **additional_fields** | **string**| Comma separated list of additional fields to include in query result for each tag. Currently supported values are: \&quot;coins\&quot; and \&quot;icos\&quot;. | [optional] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagsTagIdGet()`

```php
tagsTagIdGet($tag_id, $additional_fields): \Randomsymbols\Coinpaprika\Model\Tag
```

Get tag by ID

Returns information about a given cryptocurrency tag: * name * description * type of tag: `technical` or `functional` * number of coins with the tag * number of ICOs with the tag  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = blockchain-service; // string
$additional_fields = coins,icos; // string | Comma separated list of additional fields to include in query result for each tag. Currently supported values are: \"coins\" and \"icos\".

try {
    $result = $apiInstance->tagsTagIdGet($tag_id, $additional_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsTagIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**|  | |
| **additional_fields** | **string**| Comma separated list of additional fields to include in query result for each tag. Currently supported values are: \&quot;coins\&quot; and \&quot;icos\&quot;. | [optional] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
