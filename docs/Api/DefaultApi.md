# TutuRu\LegalSuggesterClient\DefaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**legalSuggesterServiceSuggestionsSearchGet**](DefaultApi.md#legalSuggesterServiceSuggestionsSearchGet) | **GET** /legal_suggester_service/suggestions/search | Поиск юр. лиц

# **legalSuggesterServiceSuggestionsSearchGet**
> \TutuRu\LegalSuggesterClient\Model\Suggestion[] legalSuggesterServiceSuggestionsSearchGet($query, $count)

Поиск юр. лиц

Поиск юр. лиц

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TutuRu\LegalSuggesterClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | Запрос, для которого нужно получить подсказки
$count = "count_example"; // string | Максимальное кол-во найденных совпадений

try {
    $result = $apiInstance->legalSuggesterServiceSuggestionsSearchGet($query, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->legalSuggesterServiceSuggestionsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Запрос, для которого нужно получить подсказки |
 **count** | **string**| Максимальное кол-во найденных совпадений |

### Return type

[**\TutuRu\LegalSuggesterClient\Model\Suggestion[]**](../Model/Suggestion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

