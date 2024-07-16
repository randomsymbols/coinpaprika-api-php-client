<?php
/**
 * ModelGlobal
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Coinpaprika API
 *
 * Coinpaprika API delivers precise & frequently updated market data from the world of crypto: coin prices, volumes, market caps, ATHs, return rates and more.  # Introduction If you want to use the Coinpaprika API, you have two main options: you can choose the API Free plan, which has sufficient limits for hobby and non-commercial use, or get one of the paid plans, ideal for commercial or professional use. To decide which plan is the best for you, check the [Plans and Pricing comparison](https://coinpaprika.com/api).  Depending on the selected plan, you should send requests to the appropriate base URL:  | Plan       | Base URL                            | |------------|-------------------------------------| | Free       | https://api.coinpaprika.com/v1/     | | Starter    | https://api-pro.coinpaprika.com/v1/ | | Pro        | https://api-pro.coinpaprika.com/v1/ | | Business   | https://api-pro.coinpaprika.com/v1/ | | Enterprise | https://api-pro.coinpaprika.com/v1/ |  # Authentication If you use the Free plan, you don't need to set up an API key for each request. For other plans it is required. You can generate the API key in the Developer Portal after signing in.  To provide the API key in REST API calls, set the `Authorization` header: ``` Authorization: <api-key> ```  # Standards and conventions ## General  * All endpoints return either a JSON object or array * All timestamp related fields are in seconds  ## Errors * API errors are formatted as JSON: ```{\"error\": \"<error message>\"}``` * The API uses standard HTTP status codes to indicate a request failure:   * HTTP 4XX return codes are used for invalid requests - the issue is on the sender's side   * HTTP 5XX return codes are used for internal errors - the issue is on the server's side    | HTTP Status | Description |   |---|---|   | 400 Bad Request | The server could not process the request due to invalid request parameters or invalid format of the parameters. |   | 402 Payment Required | The request could not be processed because of the user has an insufficient plan. If you want to be able to process this request, get a [higher plan](https://coinpaprika.com/api). |   | 403 Forbidden | The request could not be processed due to invalid API key. |   | 404 Not Found | The server could not process the request due to invalid URL or invalid path parameter. |   | 429 Too Many Requests | The rate limit has been exceeded. Reduce the frequency of requests to avoid this error. |   | 500 Internal Server Error | An unexpected server error has occured. |     # Rate limit * The monthly number of requests is limited depending on the plan:   | Plan       | Calls/month                         |   |------------|-------------------------------------|   | Free       | 20 000 |   | Starter    | 200 000 |   | Pro        | 500 000 |   | Business   | 3 000 000 |   | Enterprise | No limits |  # API Clients We provide the API clients in several popular programming languages: * [PHP](https://github.com/coinpaprika/coinpaprika-api-php-client) * [NodeJS](https://github.com/coinpaprika/coinpaprika-api-nodejs-client) * [GO](https://github.com/coinpaprika/coinpaprika-api-go-client) * [Swift](https://github.com/coinpaprika/coinpaprika-api-swift-client) * [Kotlin](https://github.com/coinpaprika/coinpaprika-api-kotlin-client) * [Python](https://github.com/coinpaprika/coinpaprika-api-python-client) * [Google Sheets](https://github.com/coinpaprika/coinpaprika-google-sheet) * Community Contributed Clients:   * [Rust](https://github.com/tokenomia-pro/coinpaprika-api-rust-client) built by <a href=\"https://tokenomia.pro/\" target=\"_blank\">tokenomia.pro</a>   * [C#](https://github.com/MSiccDev/CoinpaprikaAPI)   * [JS](https://github.com/jaggedsoft/coinpaprika-js)  **Note**: some of them may not be updated yet. We are working on improving them and they will be updated soon. If you'd like to contribute, please report issues and send PRs on Github.   # Terms of use * [Download terms of use](https://coinpaprika.github.io/files/terms_of_use_v1.pdf) # Archival documentations * [API v1.2](https://api.coinpaprika.com/docs/1.2) * [API v1.3](https://api.coinpaprika.com/docs/1.3) * [API v1.4](https://api.coinpaprika.com/docs/1.4) * [API v1.5](https://api.coinpaprika.com/docs/1.5) * [API v1.6](https://api.coinpaprika.com/docs/1.6) # Version history ## 1.7.8 - 2024.01.24 * Plan limits update ## 1.7.7 - 2023.06.07 * Added official Python client link ## v1.7.6 - 2023.04.12 * New intervals for OHLCV endpoint ## v1.7.5 - 2022.12.07 * Removed documentation for /beta/ endpoints ## v1.7.4 - 2022.09.19 * Key info endpoint * Coin logo image URL ## v1.7.3 - 2022.09.08 * Plans update ## v1.7.2 - 2022.07.22 * Changelog endpoint documentation ## v1.7.1 - 2022.07.14 * Beta endpoints documentation ## v1.7.0 - 2022.05.06 * API-Pro documentation ## v1.6.1 - 2020.12.09 * Added information about first date with price data for currency ticker [/tickers](#operation/getTickers) and [/tickers/{coin_id}](#operation/getTickersById) * Added redirect for historical tickers by contract address [/contracts/{platform_id}/{contract_address}/historical](#operation/getHistoricalTicker) ## v1.6.0 - 2020.10.27 * Added contracts section [/contracts](#operation/getPlatforms), [/contracts/{platform_id}](#operation/getContracts), [/contracts/{platform_id}/{contract_address}](#operation/getTicker)
 *
 * The version of the OpenAPI document: 1.7.8
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Randomsymbols\Coinpaprika\Model;

use \ArrayAccess;
use \Randomsymbols\Coinpaprika\ObjectSerializer;

/**
 * ModelGlobal Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelGlobal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_global';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'market_cap_usd' => 'float',
        'volume_24h_usd' => 'float',
        'bitcoin_dominance_percentage' => 'float',
        'cryptocurrencies_number' => 'int',
        'market_cap_ath_value' => 'float',
        'market_cap_ath_date' => 'string',
        'volume_24h_ath_value' => 'float',
        'volume_24h_ath_date' => 'string',
        'market_cap_change_24h' => 'float',
        'volume_24h_change_24h' => 'float',
        'last_updated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'market_cap_usd' => null,
        'volume_24h_usd' => null,
        'bitcoin_dominance_percentage' => null,
        'cryptocurrencies_number' => null,
        'market_cap_ath_value' => null,
        'market_cap_ath_date' => null,
        'volume_24h_ath_value' => null,
        'volume_24h_ath_date' => null,
        'market_cap_change_24h' => null,
        'volume_24h_change_24h' => null,
        'last_updated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'market_cap_usd' => false,
        'volume_24h_usd' => false,
        'bitcoin_dominance_percentage' => false,
        'cryptocurrencies_number' => false,
        'market_cap_ath_value' => false,
        'market_cap_ath_date' => false,
        'volume_24h_ath_value' => false,
        'volume_24h_ath_date' => false,
        'market_cap_change_24h' => false,
        'volume_24h_change_24h' => false,
        'last_updated' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'market_cap_usd' => 'market_cap_usd',
        'volume_24h_usd' => 'volume_24h_usd',
        'bitcoin_dominance_percentage' => 'bitcoin_dominance_percentage',
        'cryptocurrencies_number' => 'cryptocurrencies_number',
        'market_cap_ath_value' => 'market_cap_ath_value',
        'market_cap_ath_date' => 'market_cap_ath_date',
        'volume_24h_ath_value' => 'volume_24h_ath_value',
        'volume_24h_ath_date' => 'volume_24h_ath_date',
        'market_cap_change_24h' => 'market_cap_change_24h',
        'volume_24h_change_24h' => 'volume_24h_change_24h',
        'last_updated' => 'last_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_cap_usd' => 'setMarketCapUsd',
        'volume_24h_usd' => 'setVolume24hUsd',
        'bitcoin_dominance_percentage' => 'setBitcoinDominancePercentage',
        'cryptocurrencies_number' => 'setCryptocurrenciesNumber',
        'market_cap_ath_value' => 'setMarketCapAthValue',
        'market_cap_ath_date' => 'setMarketCapAthDate',
        'volume_24h_ath_value' => 'setVolume24hAthValue',
        'volume_24h_ath_date' => 'setVolume24hAthDate',
        'market_cap_change_24h' => 'setMarketCapChange24h',
        'volume_24h_change_24h' => 'setVolume24hChange24h',
        'last_updated' => 'setLastUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_cap_usd' => 'getMarketCapUsd',
        'volume_24h_usd' => 'getVolume24hUsd',
        'bitcoin_dominance_percentage' => 'getBitcoinDominancePercentage',
        'cryptocurrencies_number' => 'getCryptocurrenciesNumber',
        'market_cap_ath_value' => 'getMarketCapAthValue',
        'market_cap_ath_date' => 'getMarketCapAthDate',
        'volume_24h_ath_value' => 'getVolume24hAthValue',
        'volume_24h_ath_date' => 'getVolume24hAthDate',
        'market_cap_change_24h' => 'getMarketCapChange24h',
        'volume_24h_change_24h' => 'getVolume24hChange24h',
        'last_updated' => 'getLastUpdated'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('market_cap_usd', $data ?? [], null);
        $this->setIfExists('volume_24h_usd', $data ?? [], null);
        $this->setIfExists('bitcoin_dominance_percentage', $data ?? [], null);
        $this->setIfExists('cryptocurrencies_number', $data ?? [], null);
        $this->setIfExists('market_cap_ath_value', $data ?? [], null);
        $this->setIfExists('market_cap_ath_date', $data ?? [], null);
        $this->setIfExists('volume_24h_ath_value', $data ?? [], null);
        $this->setIfExists('volume_24h_ath_date', $data ?? [], null);
        $this->setIfExists('market_cap_change_24h', $data ?? [], null);
        $this->setIfExists('volume_24h_change_24h', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets market_cap_usd
     *
     * @return float|null
     */
    public function getMarketCapUsd()
    {
        return $this->container['market_cap_usd'];
    }

    /**
     * Sets market_cap_usd
     *
     * @param float|null $market_cap_usd Total market capitalization - sum of all cryptocurrency market capitalizations in USD
     *
     * @return self
     */
    public function setMarketCapUsd($market_cap_usd)
    {
        if (is_null($market_cap_usd)) {
            throw new \InvalidArgumentException('non-nullable market_cap_usd cannot be null');
        }
        $this->container['market_cap_usd'] = $market_cap_usd;

        return $this;
    }

    /**
     * Gets volume_24h_usd
     *
     * @return float|null
     */
    public function getVolume24hUsd()
    {
        return $this->container['volume_24h_usd'];
    }

    /**
     * Sets volume_24h_usd
     *
     * @param float|null $volume_24h_usd Total 24h volume - sum of all cryptocurrency volumes in USD
     *
     * @return self
     */
    public function setVolume24hUsd($volume_24h_usd)
    {
        if (is_null($volume_24h_usd)) {
            throw new \InvalidArgumentException('non-nullable volume_24h_usd cannot be null');
        }
        $this->container['volume_24h_usd'] = $volume_24h_usd;

        return $this;
    }

    /**
     * Gets bitcoin_dominance_percentage
     *
     * @return float|null
     */
    public function getBitcoinDominancePercentage()
    {
        return $this->container['bitcoin_dominance_percentage'];
    }

    /**
     * Sets bitcoin_dominance_percentage
     *
     * @param float|null $bitcoin_dominance_percentage Bitcoin market capitalization as a percentage of total market capitalization
     *
     * @return self
     */
    public function setBitcoinDominancePercentage($bitcoin_dominance_percentage)
    {
        if (is_null($bitcoin_dominance_percentage)) {
            throw new \InvalidArgumentException('non-nullable bitcoin_dominance_percentage cannot be null');
        }
        $this->container['bitcoin_dominance_percentage'] = $bitcoin_dominance_percentage;

        return $this;
    }

    /**
     * Gets cryptocurrencies_number
     *
     * @return int|null
     */
    public function getCryptocurrenciesNumber()
    {
        return $this->container['cryptocurrencies_number'];
    }

    /**
     * Sets cryptocurrencies_number
     *
     * @param int|null $cryptocurrencies_number This is number of active cryptocurrencies on our site (active in this case means that we have up-to-date price data for a coin). Total number of our cryptocurrencies is higher and may be obtained via counting elements in /coins endpoint.
     *
     * @return self
     */
    public function setCryptocurrenciesNumber($cryptocurrencies_number)
    {
        if (is_null($cryptocurrencies_number)) {
            throw new \InvalidArgumentException('non-nullable cryptocurrencies_number cannot be null');
        }
        $this->container['cryptocurrencies_number'] = $cryptocurrencies_number;

        return $this;
    }

    /**
     * Gets market_cap_ath_value
     *
     * @return float|null
     */
    public function getMarketCapAthValue()
    {
        return $this->container['market_cap_ath_value'];
    }

    /**
     * Sets market_cap_ath_value
     *
     * @param float|null $market_cap_ath_value ATH (All Time High) value of market capitalization - the highest historical value of marketcap
     *
     * @return self
     */
    public function setMarketCapAthValue($market_cap_ath_value)
    {
        if (is_null($market_cap_ath_value)) {
            throw new \InvalidArgumentException('non-nullable market_cap_ath_value cannot be null');
        }
        $this->container['market_cap_ath_value'] = $market_cap_ath_value;

        return $this;
    }

    /**
     * Gets market_cap_ath_date
     *
     * @return string|null
     */
    public function getMarketCapAthDate()
    {
        return $this->container['market_cap_ath_date'];
    }

    /**
     * Sets market_cap_ath_date
     *
     * @param string|null $market_cap_ath_date ATH (All Time High) date of market capitalization
     *
     * @return self
     */
    public function setMarketCapAthDate($market_cap_ath_date)
    {
        if (is_null($market_cap_ath_date)) {
            throw new \InvalidArgumentException('non-nullable market_cap_ath_date cannot be null');
        }
        $this->container['market_cap_ath_date'] = $market_cap_ath_date;

        return $this;
    }

    /**
     * Gets volume_24h_ath_value
     *
     * @return float|null
     */
    public function getVolume24hAthValue()
    {
        return $this->container['volume_24h_ath_value'];
    }

    /**
     * Sets volume_24h_ath_value
     *
     * @param float|null $volume_24h_ath_value ATH (All Time High) value of the 24h volume - the highest historical value of 24h volume
     *
     * @return self
     */
    public function setVolume24hAthValue($volume_24h_ath_value)
    {
        if (is_null($volume_24h_ath_value)) {
            throw new \InvalidArgumentException('non-nullable volume_24h_ath_value cannot be null');
        }
        $this->container['volume_24h_ath_value'] = $volume_24h_ath_value;

        return $this;
    }

    /**
     * Gets volume_24h_ath_date
     *
     * @return string|null
     */
    public function getVolume24hAthDate()
    {
        return $this->container['volume_24h_ath_date'];
    }

    /**
     * Sets volume_24h_ath_date
     *
     * @param string|null $volume_24h_ath_date ATH (All Time High) date of volume 24h
     *
     * @return self
     */
    public function setVolume24hAthDate($volume_24h_ath_date)
    {
        if (is_null($volume_24h_ath_date)) {
            throw new \InvalidArgumentException('non-nullable volume_24h_ath_date cannot be null');
        }
        $this->container['volume_24h_ath_date'] = $volume_24h_ath_date;

        return $this;
    }

    /**
     * Gets market_cap_change_24h
     *
     * @return float|null
     */
    public function getMarketCapChange24h()
    {
        return $this->container['market_cap_change_24h'];
    }

    /**
     * Sets market_cap_change_24h
     *
     * @param float|null $market_cap_change_24h Percentage change in the market capitalization over the last 24h
     *
     * @return self
     */
    public function setMarketCapChange24h($market_cap_change_24h)
    {
        if (is_null($market_cap_change_24h)) {
            throw new \InvalidArgumentException('non-nullable market_cap_change_24h cannot be null');
        }
        $this->container['market_cap_change_24h'] = $market_cap_change_24h;

        return $this;
    }

    /**
     * Gets volume_24h_change_24h
     *
     * @return float|null
     */
    public function getVolume24hChange24h()
    {
        return $this->container['volume_24h_change_24h'];
    }

    /**
     * Sets volume_24h_change_24h
     *
     * @param float|null $volume_24h_change_24h Percentage change in the volume 24h over the last 24h
     *
     * @return self
     */
    public function setVolume24hChange24h($volume_24h_change_24h)
    {
        if (is_null($volume_24h_change_24h)) {
            throw new \InvalidArgumentException('non-nullable volume_24h_change_24h cannot be null');
        }
        $this->container['volume_24h_change_24h'] = $volume_24h_change_24h;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return int|null
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param int|null $last_updated Timestamp of the last data update
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            throw new \InvalidArgumentException('non-nullable last_updated cannot be null');
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


