# # Info

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan** | **string** | Name of the API plan | [optional]
**plan_started_at** | **string** | A date when the plan started in RFC3999 (ISO-8601) format | [optional]
**plan_status** | **string** | Status of the plan. There are 3 possible statuses: &#x60;active&#x60; - the subscription is active; &#x60;past_due&#x60; - the subscription payment failed. If payment is not made within 7 days, then the subscription will expire; &#x60;inactive&#x60; - the subscription is inactive. | [optional]
**portal_url** | **string** | API Customer Portal URL | [optional]
**usage** | [**\Randomsymbols\Coinpaprika\Model\Usage**](Usage.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
