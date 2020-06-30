# \DefaultApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**LegalSuggesterServiceSuggestionsSearchGet**](DefaultApi.md#LegalSuggesterServiceSuggestionsSearchGet) | **Get** /legal_suggester_service/suggestions/search | Поиск юр. лиц



## LegalSuggesterServiceSuggestionsSearchGet

> []Suggestion LegalSuggesterServiceSuggestionsSearchGet(ctx, query, count)

Поиск юр. лиц

Поиск юр. лиц

### Required Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
**query** | **string**| Запрос, для которого нужно получить подсказки | 
**count** | **string**| Максимальное кол-во найденных совпадений | 

### Return type

[**[]Suggestion**](Suggestion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)

