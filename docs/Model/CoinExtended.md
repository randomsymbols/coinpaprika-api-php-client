# # CoinExtended

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of coin on coinpaprika.com | [optional]
**name** | **string** | Name of the cryptocurrency | [optional]
**symbol** | **string** | Symbol of the cryptocurrency | [optional]
**parent** | [**CoinParent**](CoinParent.md) | This field is deprecated. Use &#x60;contracts&#x60; field instead | [optional]
**rank** | **int** | Current coin ranking position on coinpaprika.com | [optional]
**is_new** | **bool** | Flag indicating if the currency was added within the last 5 days | [optional]
**is_active** | **bool** | Flag indicating if the currency is active, which means that we can calculate the current price and volume | [optional]
**type** | **string** | Type of the cryptocurrency. Currently supported values are &#x60;coin&#x60; and &#x60;token&#x60; | [optional]
**logo** | **string** | Logo image URL | [optional]
**tags** | [**\Randomsymbols\Coinpaprika\Model\TagSimplified[]**](TagSimplified.md) | The array of tags to which this coin was assigned on coinpaprika.com | [optional]
**team** | [**\Randomsymbols\Coinpaprika\Model\PersonWithPosition[]**](PersonWithPosition.md) | The cryptocurrency founding and/or developing team | [optional]
**description** | **string** | Text description of the cryptocurrency | [optional]
**message** | **string** | An important message about current status of the cryptocurrency | [optional]
**open_source** | **bool** | Set to true if the cryptocurrency is Open Source project | [optional]
**hardware_wallet** | **bool** | Set to true if the cryptocurrency is supported by any hardware wallet | [optional]
**started_at** | **string** | Launch date of the cryptocurrency | [optional]
**development_status** | **string** | Development status of the cryptocurrency - if it is a working project, beta version, just an idea, etc. | [optional]
**proof_type** | **string** | Cryptocurrency proof type: Proof of Work, Proof of Stake, etc. | [optional]
**org_structure** | **string** | The cryptocurrency organization structure: centralized, decentralized, hierarchical, flat, etc. | [optional]
**hash_algorithm** | **string** | Name of the hash algorithm used by the cryptocurrency | [optional]
**contract** | **string** | This field is deprecated. Use &#x60;contracts&#x60; field instead | [optional]
**platform** | **string** | This field is deprecated. Use &#x60;contracts&#x60; field instead | [optional]
**contracts** | [**\Randomsymbols\Coinpaprika\Model\Contract[]**](Contract.md) |  | [optional]
**links** | [**\Randomsymbols\Coinpaprika\Model\CoinLinks**](CoinLinks.md) |  | [optional]
**links_extended** | [**\Randomsymbols\Coinpaprika\Model\LinkExtended[]**](LinkExtended.md) | Contains all links of the &#x60;{coin_id}&#x60; coin together with statistics for some of them, e.g. number of twitter followers, reddit subscribers, telegram members or github repository stars and contributors | [optional]
**whitepaper** | [**\Randomsymbols\Coinpaprika\Model\Whitepaper**](Whitepaper.md) |  | [optional]
**first_data_at** | **string** | Date of the first available ticker data for the coin. RFC3999 (ISO-8601) format | [optional]
**last_data_at** | **string** | Date of the last available ticker data for the coin. RFC3999 (ISO-8601) format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
