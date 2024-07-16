# Randomsymbols\Coinpaprika\ToolsApi

All URIs are relative to https://api.coinpaprika.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**priceConverterGet()**](ToolsApi.md#priceConverterGet) | **GET** /price-converter | Price converter |
| [**searchGet()**](ToolsApi.md#searchGet) | **GET** /search | Search |


## `priceConverterGet()`

```php
priceConverterGet($base_currency_id, $quote_currency_id, $amount): \Randomsymbols\Coinpaprika\Model\PriceConverterResponse
```

Price converter

Converts a set amount of base currency to quote currency.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_currency_id = 'base_currency_id_example'; // string
$quote_currency_id = 'quote_currency_id_example'; // string
$amount = 0; // int

try {
    $result = $apiInstance->priceConverterGet($base_currency_id, $quote_currency_id, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->priceConverterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_currency_id** | **string**|  | |
| **quote_currency_id** | **string**|  | |
| **amount** | **int**|  | [optional] [default to 0] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\PriceConverterResponse**](../Model/PriceConverterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGet()`

```php
searchGet($q, $c, $modifier, $limit): \Randomsymbols\Coinpaprika\Model\SearchResults
```

Search

Returns currencies, exchanges, icos, people, tags on coinpaprika.com for a given search query.  **Available on the following API plans:** - Free - Starter - Pro - Business - Enterprise  **Update interval:** Every 1 minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Randomsymbols\Coinpaprika\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | phrase for search eg. `btc`
$c = 'currencies,exchanges,icos,people,tags'; // string | one or more categories (comma separated) to search. Available options: `currencies|exchanges|icos|people|tags`
$modifier = 'modifier_example'; // string | set modifier for search results. Available options: `symbol_search` - search only by symbol (works for currencies only)
$limit = 6; // int | limit of results per category (max 250)

try {
    $result = $apiInstance->searchGet($q, $c, $modifier, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->searchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| phrase for search eg. &#x60;btc&#x60; | |
| **c** | **string**| one or more categories (comma separated) to search. Available options: &#x60;currencies|exchanges|icos|people|tags&#x60; | [optional] [default to &#39;currencies,exchanges,icos,people,tags&#39;] |
| **modifier** | **string**| set modifier for search results. Available options: &#x60;symbol_search&#x60; - search only by symbol (works for currencies only) | [optional] |
| **limit** | **int**| limit of results per category (max 250) | [optional] [default to 6] |

### Return type

[**\Randomsymbols\Coinpaprika\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
