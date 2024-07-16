<?php
/**
 * Twitter
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
 * Twitter Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Twitter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'twitter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string',
        'user_name' => 'string',
        'user_image_link' => 'string',
        'status' => 'string',
        'is_retweet' => 'bool',
        'retweet_count' => 'int',
        'like_count' => 'int',
        'status_link' => 'string',
        'status_id' => 'string',
        'media_link' => 'string',
        'youtube_link' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'user_name' => null,
        'user_image_link' => null,
        'status' => null,
        'is_retweet' => null,
        'retweet_count' => null,
        'like_count' => null,
        'status_link' => null,
        'status_id' => null,
        'media_link' => null,
        'youtube_link' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
        'user_name' => false,
        'user_image_link' => false,
        'status' => false,
        'is_retweet' => false,
        'retweet_count' => false,
        'like_count' => false,
        'status_link' => false,
        'status_id' => false,
        'media_link' => true,
        'youtube_link' => true
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
        'date' => 'date',
        'user_name' => 'user_name',
        'user_image_link' => 'user_image_link',
        'status' => 'status',
        'is_retweet' => 'is_retweet',
        'retweet_count' => 'retweet_count',
        'like_count' => 'like_count',
        'status_link' => 'status_link',
        'status_id' => 'status_id',
        'media_link' => 'media_link',
        'youtube_link' => 'youtube_link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'user_name' => 'setUserName',
        'user_image_link' => 'setUserImageLink',
        'status' => 'setStatus',
        'is_retweet' => 'setIsRetweet',
        'retweet_count' => 'setRetweetCount',
        'like_count' => 'setLikeCount',
        'status_link' => 'setStatusLink',
        'status_id' => 'setStatusId',
        'media_link' => 'setMediaLink',
        'youtube_link' => 'setYoutubeLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'user_name' => 'getUserName',
        'user_image_link' => 'getUserImageLink',
        'status' => 'getStatus',
        'is_retweet' => 'getIsRetweet',
        'retweet_count' => 'getRetweetCount',
        'like_count' => 'getLikeCount',
        'status_link' => 'getStatusLink',
        'status_id' => 'getStatusId',
        'media_link' => 'getMediaLink',
        'youtube_link' => 'getYoutubeLink'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('user_image_link', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('is_retweet', $data ?? [], null);
        $this->setIfExists('retweet_count', $data ?? [], null);
        $this->setIfExists('like_count', $data ?? [], null);
        $this->setIfExists('status_link', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('media_link', $data ?? [], null);
        $this->setIfExists('youtube_link', $data ?? [], null);
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
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date Publish date of the tweet. RFC3999 (ISO-8601) format
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name Twitter profile user name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_image_link
     *
     * @return string|null
     */
    public function getUserImageLink()
    {
        return $this->container['user_image_link'];
    }

    /**
     * Sets user_image_link
     *
     * @param string|null $user_image_link Twitter profile user image URL
     *
     * @return self
     */
    public function setUserImageLink($user_image_link)
    {
        if (is_null($user_image_link)) {
            throw new \InvalidArgumentException('non-nullable user_image_link cannot be null');
        }
        $this->container['user_image_link'] = $user_image_link;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Tweet content
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_retweet
     *
     * @return bool|null
     */
    public function getIsRetweet()
    {
        return $this->container['is_retweet'];
    }

    /**
     * Sets is_retweet
     *
     * @param bool|null $is_retweet Flag indicating whether it is a retweet of someone else's tweet
     *
     * @return self
     */
    public function setIsRetweet($is_retweet)
    {
        if (is_null($is_retweet)) {
            throw new \InvalidArgumentException('non-nullable is_retweet cannot be null');
        }
        $this->container['is_retweet'] = $is_retweet;

        return $this;
    }

    /**
     * Gets retweet_count
     *
     * @return int|null
     */
    public function getRetweetCount()
    {
        return $this->container['retweet_count'];
    }

    /**
     * Sets retweet_count
     *
     * @param int|null $retweet_count Number of retweets of this tweet
     *
     * @return self
     */
    public function setRetweetCount($retweet_count)
    {
        if (is_null($retweet_count)) {
            throw new \InvalidArgumentException('non-nullable retweet_count cannot be null');
        }
        $this->container['retweet_count'] = $retweet_count;

        return $this;
    }

    /**
     * Gets like_count
     *
     * @return int|null
     */
    public function getLikeCount()
    {
        return $this->container['like_count'];
    }

    /**
     * Sets like_count
     *
     * @param int|null $like_count Number of likes of this tweet
     *
     * @return self
     */
    public function setLikeCount($like_count)
    {
        if (is_null($like_count)) {
            throw new \InvalidArgumentException('non-nullable like_count cannot be null');
        }
        $this->container['like_count'] = $like_count;

        return $this;
    }

    /**
     * Gets status_link
     *
     * @return string|null
     */
    public function getStatusLink()
    {
        return $this->container['status_link'];
    }

    /**
     * Sets status_link
     *
     * @param string|null $status_link Tweet URL
     *
     * @return self
     */
    public function setStatusLink($status_link)
    {
        if (is_null($status_link)) {
            throw new \InvalidArgumentException('non-nullable status_link cannot be null');
        }
        $this->container['status_link'] = $status_link;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param string|null $status_id Tweet ID
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets media_link
     *
     * @return string|null
     */
    public function getMediaLink()
    {
        return $this->container['media_link'];
    }

    /**
     * Sets media_link
     *
     * @param string|null $media_link media_link
     *
     * @return self
     */
    public function setMediaLink($media_link)
    {
        if (is_null($media_link)) {
            array_push($this->openAPINullablesSetToNull, 'media_link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('media_link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['media_link'] = $media_link;

        return $this;
    }

    /**
     * Gets youtube_link
     *
     * @return string|null
     */
    public function getYoutubeLink()
    {
        return $this->container['youtube_link'];
    }

    /**
     * Sets youtube_link
     *
     * @param string|null $youtube_link Link to Youtube video shared in this tweet
     *
     * @return self
     */
    public function setYoutubeLink($youtube_link)
    {
        if (is_null($youtube_link)) {
            array_push($this->openAPINullablesSetToNull, 'youtube_link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('youtube_link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['youtube_link'] = $youtube_link;

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


