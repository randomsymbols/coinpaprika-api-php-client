<?php
/**
 * Quote
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
 * Quote Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Quote implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'quote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price' => 'float',
        'volume_24h' => 'float',
        'volume_24h_change_24h' => 'float',
        'market_cap' => 'float',
        'market_cap_change_24h' => 'float',
        'percent_change_1h' => 'float',
        'percent_change_12h' => 'float',
        'percent_change_24h' => 'float',
        'percent_change_7d' => 'float',
        'percent_change_30d' => 'float',
        'percent_change_1y' => 'float',
        'ath_price' => 'float',
        'ath_date' => 'string',
        'percent_from_price_ath' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'price' => null,
        'volume_24h' => null,
        'volume_24h_change_24h' => null,
        'market_cap' => null,
        'market_cap_change_24h' => null,
        'percent_change_1h' => null,
        'percent_change_12h' => null,
        'percent_change_24h' => null,
        'percent_change_7d' => null,
        'percent_change_30d' => null,
        'percent_change_1y' => null,
        'ath_price' => null,
        'ath_date' => null,
        'percent_from_price_ath' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'price' => false,
        'volume_24h' => false,
        'volume_24h_change_24h' => false,
        'market_cap' => false,
        'market_cap_change_24h' => false,
        'percent_change_1h' => false,
        'percent_change_12h' => false,
        'percent_change_24h' => false,
        'percent_change_7d' => false,
        'percent_change_30d' => false,
        'percent_change_1y' => false,
        'ath_price' => false,
        'ath_date' => false,
        'percent_from_price_ath' => false
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
        'price' => 'price',
        'volume_24h' => 'volume_24h',
        'volume_24h_change_24h' => 'volume_24h_change_24h',
        'market_cap' => 'market_cap',
        'market_cap_change_24h' => 'market_cap_change_24h',
        'percent_change_1h' => 'percent_change_1h',
        'percent_change_12h' => 'percent_change_12h',
        'percent_change_24h' => 'percent_change_24h',
        'percent_change_7d' => 'percent_change_7d',
        'percent_change_30d' => 'percent_change_30d',
        'percent_change_1y' => 'percent_change_1y',
        'ath_price' => 'ath_price',
        'ath_date' => 'ath_date',
        'percent_from_price_ath' => 'percent_from_price_ath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'volume_24h' => 'setVolume24h',
        'volume_24h_change_24h' => 'setVolume24hChange24h',
        'market_cap' => 'setMarketCap',
        'market_cap_change_24h' => 'setMarketCapChange24h',
        'percent_change_1h' => 'setPercentChange1h',
        'percent_change_12h' => 'setPercentChange12h',
        'percent_change_24h' => 'setPercentChange24h',
        'percent_change_7d' => 'setPercentChange7d',
        'percent_change_30d' => 'setPercentChange30d',
        'percent_change_1y' => 'setPercentChange1y',
        'ath_price' => 'setAthPrice',
        'ath_date' => 'setAthDate',
        'percent_from_price_ath' => 'setPercentFromPriceAth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'volume_24h' => 'getVolume24h',
        'volume_24h_change_24h' => 'getVolume24hChange24h',
        'market_cap' => 'getMarketCap',
        'market_cap_change_24h' => 'getMarketCapChange24h',
        'percent_change_1h' => 'getPercentChange1h',
        'percent_change_12h' => 'getPercentChange12h',
        'percent_change_24h' => 'getPercentChange24h',
        'percent_change_7d' => 'getPercentChange7d',
        'percent_change_30d' => 'getPercentChange30d',
        'percent_change_1y' => 'getPercentChange1y',
        'ath_price' => 'getAthPrice',
        'ath_date' => 'getAthDate',
        'percent_from_price_ath' => 'getPercentFromPriceAth'
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
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('volume_24h', $data ?? [], null);
        $this->setIfExists('volume_24h_change_24h', $data ?? [], null);
        $this->setIfExists('market_cap', $data ?? [], null);
        $this->setIfExists('market_cap_change_24h', $data ?? [], null);
        $this->setIfExists('percent_change_1h', $data ?? [], null);
        $this->setIfExists('percent_change_12h', $data ?? [], null);
        $this->setIfExists('percent_change_24h', $data ?? [], null);
        $this->setIfExists('percent_change_7d', $data ?? [], null);
        $this->setIfExists('percent_change_30d', $data ?? [], null);
        $this->setIfExists('percent_change_1y', $data ?? [], null);
        $this->setIfExists('ath_price', $data ?? [], null);
        $this->setIfExists('ath_date', $data ?? [], null);
        $this->setIfExists('percent_from_price_ath', $data ?? [], null);
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
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets volume_24h
     *
     * @return float|null
     */
    public function getVolume24h()
    {
        return $this->container['volume_24h'];
    }

    /**
     * Sets volume_24h
     *
     * @param float|null $volume_24h volume_24h
     *
     * @return self
     */
    public function setVolume24h($volume_24h)
    {
        if (is_null($volume_24h)) {
            throw new \InvalidArgumentException('non-nullable volume_24h cannot be null');
        }
        $this->container['volume_24h'] = $volume_24h;

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
     * @param float|null $volume_24h_change_24h volume_24h_change_24h
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
     * Gets market_cap
     *
     * @return float|null
     */
    public function getMarketCap()
    {
        return $this->container['market_cap'];
    }

    /**
     * Sets market_cap
     *
     * @param float|null $market_cap market_cap
     *
     * @return self
     */
    public function setMarketCap($market_cap)
    {
        if (is_null($market_cap)) {
            throw new \InvalidArgumentException('non-nullable market_cap cannot be null');
        }
        $this->container['market_cap'] = $market_cap;

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
     * @param float|null $market_cap_change_24h market_cap_change_24h
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
     * Gets percent_change_1h
     *
     * @return float|null
     */
    public function getPercentChange1h()
    {
        return $this->container['percent_change_1h'];
    }

    /**
     * Sets percent_change_1h
     *
     * @param float|null $percent_change_1h percent_change_1h
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
     * Gets percent_change_12h
     *
     * @return float|null
     */
    public function getPercentChange12h()
    {
        return $this->container['percent_change_12h'];
    }

    /**
     * Sets percent_change_12h
     *
     * @param float|null $percent_change_12h percent_change_12h
     *
     * @return self
     */
    public function setPercentChange12h($percent_change_12h)
    {
        if (is_null($percent_change_12h)) {
            throw new \InvalidArgumentException('non-nullable percent_change_12h cannot be null');
        }
        $this->container['percent_change_12h'] = $percent_change_12h;

        return $this;
    }

    /**
     * Gets percent_change_24h
     *
     * @return float|null
     */
    public function getPercentChange24h()
    {
        return $this->container['percent_change_24h'];
    }

    /**
     * Sets percent_change_24h
     *
     * @param float|null $percent_change_24h percent_change_24h
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
     * @return float|null
     */
    public function getPercentChange7d()
    {
        return $this->container['percent_change_7d'];
    }

    /**
     * Sets percent_change_7d
     *
     * @param float|null $percent_change_7d percent_change_7d
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
     * Gets percent_change_30d
     *
     * @return float|null
     */
    public function getPercentChange30d()
    {
        return $this->container['percent_change_30d'];
    }

    /**
     * Sets percent_change_30d
     *
     * @param float|null $percent_change_30d percent_change_30d
     *
     * @return self
     */
    public function setPercentChange30d($percent_change_30d)
    {
        if (is_null($percent_change_30d)) {
            throw new \InvalidArgumentException('non-nullable percent_change_30d cannot be null');
        }
        $this->container['percent_change_30d'] = $percent_change_30d;

        return $this;
    }

    /**
     * Gets percent_change_1y
     *
     * @return float|null
     */
    public function getPercentChange1y()
    {
        return $this->container['percent_change_1y'];
    }

    /**
     * Sets percent_change_1y
     *
     * @param float|null $percent_change_1y percent_change_1y
     *
     * @return self
     */
    public function setPercentChange1y($percent_change_1y)
    {
        if (is_null($percent_change_1y)) {
            throw new \InvalidArgumentException('non-nullable percent_change_1y cannot be null');
        }
        $this->container['percent_change_1y'] = $percent_change_1y;

        return $this;
    }

    /**
     * Gets ath_price
     *
     * @return float|null
     */
    public function getAthPrice()
    {
        return $this->container['ath_price'];
    }

    /**
     * Sets ath_price
     *
     * @param float|null $ath_price ath_price
     *
     * @return self
     */
    public function setAthPrice($ath_price)
    {
        if (is_null($ath_price)) {
            throw new \InvalidArgumentException('non-nullable ath_price cannot be null');
        }
        $this->container['ath_price'] = $ath_price;

        return $this;
    }

    /**
     * Gets ath_date
     *
     * @return string|null
     */
    public function getAthDate()
    {
        return $this->container['ath_date'];
    }

    /**
     * Sets ath_date
     *
     * @param string|null $ath_date ath_date
     *
     * @return self
     */
    public function setAthDate($ath_date)
    {
        if (is_null($ath_date)) {
            throw new \InvalidArgumentException('non-nullable ath_date cannot be null');
        }
        $this->container['ath_date'] = $ath_date;

        return $this;
    }

    /**
     * Gets percent_from_price_ath
     *
     * @return float|null
     */
    public function getPercentFromPriceAth()
    {
        return $this->container['percent_from_price_ath'];
    }

    /**
     * Sets percent_from_price_ath
     *
     * @param float|null $percent_from_price_ath percent_from_price_ath
     *
     * @return self
     */
    public function setPercentFromPriceAth($percent_from_price_ath)
    {
        if (is_null($percent_from_price_ath)) {
            throw new \InvalidArgumentException('non-nullable percent_from_price_ath cannot be null');
        }
        $this->container['percent_from_price_ath'] = $percent_from_price_ath;

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


