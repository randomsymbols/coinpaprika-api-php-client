<?php
/**
 * TickDeprecated
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
 * TickDeprecated Class Doc Comment
 *
 * @category Class
 * @description Tick response. Missing values are returned as empty string
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TickDeprecated implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tick_deprecated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'symbol' => 'string',
        'rank' => 'string',
        'price_usd' => 'string',
        'price_btc' => 'string',
        'volume_24h_usd' => 'string',
        'market_cap_usd' => 'string',
        'circulating_supply' => 'string',
        'total_supply' => 'string',
        'max_supply' => 'string',
        'percent_change_1h' => 'string',
        'percent_change_24h' => 'string',
        'percent_change_7d' => 'string',
        'last_updated' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'symbol' => null,
        'rank' => null,
        'price_usd' => null,
        'price_btc' => null,
        'volume_24h_usd' => null,
        'market_cap_usd' => null,
        'circulating_supply' => null,
        'total_supply' => null,
        'max_supply' => null,
        'percent_change_1h' => null,
        'percent_change_24h' => null,
        'percent_change_7d' => null,
        'last_updated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'symbol' => false,
        'rank' => false,
        'price_usd' => false,
        'price_btc' => false,
        'volume_24h_usd' => false,
        'market_cap_usd' => false,
        'circulating_supply' => false,
        'total_supply' => false,
        'max_supply' => false,
        'percent_change_1h' => false,
        'percent_change_24h' => false,
        'percent_change_7d' => false,
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
        'id' => 'id',
        'name' => 'name',
        'symbol' => 'symbol',
        'rank' => 'rank',
        'price_usd' => 'price_usd',
        'price_btc' => 'price_btc',
        'volume_24h_usd' => 'volume_24h_usd',
        'market_cap_usd' => 'market_cap_usd',
        'circulating_supply' => 'circulating_supply',
        'total_supply' => 'total_supply',
        'max_supply' => 'max_supply',
        'percent_change_1h' => 'percent_change_1h',
        'percent_change_24h' => 'percent_change_24h',
        'percent_change_7d' => 'percent_change_7d',
        'last_updated' => 'last_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'symbol' => 'setSymbol',
        'rank' => 'setRank',
        'price_usd' => 'setPriceUsd',
        'price_btc' => 'setPriceBtc',
        'volume_24h_usd' => 'setVolume24hUsd',
        'market_cap_usd' => 'setMarketCapUsd',
        'circulating_supply' => 'setCirculatingSupply',
        'total_supply' => 'setTotalSupply',
        'max_supply' => 'setMaxSupply',
        'percent_change_1h' => 'setPercentChange1h',
        'percent_change_24h' => 'setPercentChange24h',
        'percent_change_7d' => 'setPercentChange7d',
        'last_updated' => 'setLastUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'symbol' => 'getSymbol',
        'rank' => 'getRank',
        'price_usd' => 'getPriceUsd',
        'price_btc' => 'getPriceBtc',
        'volume_24h_usd' => 'getVolume24hUsd',
        'market_cap_usd' => 'getMarketCapUsd',
        'circulating_supply' => 'getCirculatingSupply',
        'total_supply' => 'getTotalSupply',
        'max_supply' => 'getMaxSupply',
        'percent_change_1h' => 'getPercentChange1h',
        'percent_change_24h' => 'getPercentChange24h',
        'percent_change_7d' => 'getPercentChange7d',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('rank', $data ?? [], null);
        $this->setIfExists('price_usd', $data ?? [], null);
        $this->setIfExists('price_btc', $data ?? [], null);
        $this->setIfExists('volume_24h_usd', $data ?? [], null);
        $this->setIfExists('market_cap_usd', $data ?? [], null);
        $this->setIfExists('circulating_supply', $data ?? [], null);
        $this->setIfExists('total_supply', $data ?? [], null);
        $this->setIfExists('max_supply', $data ?? [], null);
        $this->setIfExists('percent_change_1h', $data ?? [], null);
        $this->setIfExists('percent_change_24h', $data ?? [], null);
        $this->setIfExists('percent_change_7d', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return string|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param string|null $rank rank
     *
     * @return self
     */
    public function setRank($rank)
    {
        if (is_null($rank)) {
            throw new \InvalidArgumentException('non-nullable rank cannot be null');
        }
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets price_usd
     *
     * @return string|null
     */
    public function getPriceUsd()
    {
        return $this->container['price_usd'];
    }

    /**
     * Sets price_usd
     *
     * @param string|null $price_usd price_usd
     *
     * @return self
     */
    public function setPriceUsd($price_usd)
    {
        if (is_null($price_usd)) {
            throw new \InvalidArgumentException('non-nullable price_usd cannot be null');
        }
        $this->container['price_usd'] = $price_usd;

        return $this;
    }

    /**
     * Gets price_btc
     *
     * @return string|null
     */
    public function getPriceBtc()
    {
        return $this->container['price_btc'];
    }

    /**
     * Sets price_btc
     *
     * @param string|null $price_btc price_btc
     *
     * @return self
     */
    public function setPriceBtc($price_btc)
    {
        if (is_null($price_btc)) {
            throw new \InvalidArgumentException('non-nullable price_btc cannot be null');
        }
        $this->container['price_btc'] = $price_btc;

        return $this;
    }

    /**
     * Gets volume_24h_usd
     *
     * @return string|null
     */
    public function getVolume24hUsd()
    {
        return $this->container['volume_24h_usd'];
    }

    /**
     * Sets volume_24h_usd
     *
     * @param string|null $volume_24h_usd volume_24h_usd
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
     * Gets market_cap_usd
     *
     * @return string|null
     */
    public function getMarketCapUsd()
    {
        return $this->container['market_cap_usd'];
    }

    /**
     * Sets market_cap_usd
     *
     * @param string|null $market_cap_usd market_cap_usd
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
     * Gets circulating_supply
     *
     * @return string|null
     */
    public function getCirculatingSupply()
    {
        return $this->container['circulating_supply'];
    }

    /**
     * Sets circulating_supply
     *
     * @param string|null $circulating_supply circulating_supply
     *
     * @return self
     */
    public function setCirculatingSupply($circulating_supply)
    {
        if (is_null($circulating_supply)) {
            throw new \InvalidArgumentException('non-nullable circulating_supply cannot be null');
        }
        $this->container['circulating_supply'] = $circulating_supply;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return string|null
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param string|null $total_supply total_supply
     *
     * @return self
     */
    public function setTotalSupply($total_supply)
    {
        if (is_null($total_supply)) {
            throw new \InvalidArgumentException('non-nullable total_supply cannot be null');
        }
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets max_supply
     *
     * @return string|null
     */
    public function getMaxSupply()
    {
        return $this->container['max_supply'];
    }

    /**
     * Sets max_supply
     *
     * @param string|null $max_supply max_supply
     *
     * @return self
     */
    public function setMaxSupply($max_supply)
    {
        if (is_null($max_supply)) {
            throw new \InvalidArgumentException('non-nullable max_supply cannot be null');
        }
        $this->container['max_supply'] = $max_supply;

        return $this;
    }

    /**
     * Gets percent_change_1h
     *
     * @return string|null
     */
    public function getPercentChange1h()
    {
        return $this->container['percent_change_1h'];
    }

    /**
     * Sets percent_change_1h
     *
     * @param string|null $percent_change_1h percent_change_1h
     *
     * @return self
     */
    public function setPercentChange1h($percent_change_1h)
    {
        if (is_null($percent_change_1h)) {
            throw new \InvalidArgumentException('non-nullable percent_change_1h cannot be null');
        }
        $this->container['percent_change_1h'] = $percent_change_1h;

        return $this;
    }

    /**
     * Gets percent_change_24h
     *
     * @return string|null
     */
    public function getPercentChange24h()
    {
        return $this->container['percent_change_24h'];
    }

    /**
     * Sets percent_change_24h
     *
     * @param string|null $percent_change_24h percent_change_24h
     *
     * @return self
     */
    public function setPercentChange24h($percent_change_24h)
    {
        if (is_null($percent_change_24h)) {
            throw new \InvalidArgumentException('non-nullable percent_change_24h cannot be null');
        }
        $this->container['percent_change_24h'] = $percent_change_24h;

        return $this;
    }

    /**
     * Gets percent_change_7d
     *
     * @return string|null
     */
    public function getPercentChange7d()
    {
        return $this->container['percent_change_7d'];
    }

    /**
     * Sets percent_change_7d
     *
     * @param string|null $percent_change_7d percent_change_7d
     *
     * @return self
     */
    public function setPercentChange7d($percent_change_7d)
    {
        if (is_null($percent_change_7d)) {
            throw new \InvalidArgumentException('non-nullable percent_change_7d cannot be null');
        }
        $this->container['percent_change_7d'] = $percent_change_7d;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param string|null $last_updated last_updated
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


