<?php
/**
 * CoinExtended
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
 * CoinExtended Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CoinExtended implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'coin_extended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'symbol' => 'string',
        'parent' => 'CoinParent',
        'rank' => 'int',
        'is_new' => 'bool',
        'is_active' => 'bool',
        'type' => 'string',
        'logo' => 'string',
        'tags' => '\Randomsymbols\Coinpaprika\Model\TagSimplified[]',
        'team' => '\Randomsymbols\Coinpaprika\Model\PersonWithPosition[]',
        'description' => 'string',
        'message' => 'string',
        'open_source' => 'bool',
        'hardware_wallet' => 'bool',
        'started_at' => 'string',
        'development_status' => 'string',
        'proof_type' => 'string',
        'org_structure' => 'string',
        'hash_algorithm' => 'string',
        'contract' => 'string',
        'platform' => 'string',
        'contracts' => '\Randomsymbols\Coinpaprika\Model\Contract[]',
        'links' => '\Randomsymbols\Coinpaprika\Model\CoinLinks',
        'links_extended' => '\Randomsymbols\Coinpaprika\Model\LinkExtended[]',
        'whitepaper' => '\Randomsymbols\Coinpaprika\Model\Whitepaper',
        'first_data_at' => 'string',
        'last_data_at' => 'string'
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
        'parent' => null,
        'rank' => null,
        'is_new' => null,
        'is_active' => null,
        'type' => null,
        'logo' => null,
        'tags' => null,
        'team' => null,
        'description' => null,
        'message' => null,
        'open_source' => null,
        'hardware_wallet' => null,
        'started_at' => null,
        'development_status' => null,
        'proof_type' => null,
        'org_structure' => null,
        'hash_algorithm' => null,
        'contract' => null,
        'platform' => null,
        'contracts' => null,
        'links' => null,
        'links_extended' => null,
        'whitepaper' => null,
        'first_data_at' => null,
        'last_data_at' => null
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
        'parent' => true,
        'rank' => false,
        'is_new' => false,
        'is_active' => false,
        'type' => false,
        'logo' => false,
        'tags' => false,
        'team' => false,
        'description' => true,
        'message' => false,
        'open_source' => false,
        'hardware_wallet' => false,
        'started_at' => true,
        'development_status' => true,
        'proof_type' => true,
        'org_structure' => true,
        'hash_algorithm' => true,
        'contract' => true,
        'platform' => true,
        'contracts' => false,
        'links' => false,
        'links_extended' => false,
        'whitepaper' => false,
        'first_data_at' => false,
        'last_data_at' => false
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
        'parent' => 'parent',
        'rank' => 'rank',
        'is_new' => 'is_new',
        'is_active' => 'is_active',
        'type' => 'type',
        'logo' => 'logo',
        'tags' => 'tags',
        'team' => 'team',
        'description' => 'description',
        'message' => 'message',
        'open_source' => 'open_source',
        'hardware_wallet' => 'hardware_wallet',
        'started_at' => 'started_at',
        'development_status' => 'development_status',
        'proof_type' => 'proof_type',
        'org_structure' => 'org_structure',
        'hash_algorithm' => 'hash_algorithm',
        'contract' => 'contract',
        'platform' => 'platform',
        'contracts' => 'contracts',
        'links' => 'links',
        'links_extended' => 'links_extended',
        'whitepaper' => 'whitepaper',
        'first_data_at' => 'first_data_at',
        'last_data_at' => 'last_data_at'
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
        'parent' => 'setParent',
        'rank' => 'setRank',
        'is_new' => 'setIsNew',
        'is_active' => 'setIsActive',
        'type' => 'setType',
        'logo' => 'setLogo',
        'tags' => 'setTags',
        'team' => 'setTeam',
        'description' => 'setDescription',
        'message' => 'setMessage',
        'open_source' => 'setOpenSource',
        'hardware_wallet' => 'setHardwareWallet',
        'started_at' => 'setStartedAt',
        'development_status' => 'setDevelopmentStatus',
        'proof_type' => 'setProofType',
        'org_structure' => 'setOrgStructure',
        'hash_algorithm' => 'setHashAlgorithm',
        'contract' => 'setContract',
        'platform' => 'setPlatform',
        'contracts' => 'setContracts',
        'links' => 'setLinks',
        'links_extended' => 'setLinksExtended',
        'whitepaper' => 'setWhitepaper',
        'first_data_at' => 'setFirstDataAt',
        'last_data_at' => 'setLastDataAt'
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
        'parent' => 'getParent',
        'rank' => 'getRank',
        'is_new' => 'getIsNew',
        'is_active' => 'getIsActive',
        'type' => 'getType',
        'logo' => 'getLogo',
        'tags' => 'getTags',
        'team' => 'getTeam',
        'description' => 'getDescription',
        'message' => 'getMessage',
        'open_source' => 'getOpenSource',
        'hardware_wallet' => 'getHardwareWallet',
        'started_at' => 'getStartedAt',
        'development_status' => 'getDevelopmentStatus',
        'proof_type' => 'getProofType',
        'org_structure' => 'getOrgStructure',
        'hash_algorithm' => 'getHashAlgorithm',
        'contract' => 'getContract',
        'platform' => 'getPlatform',
        'contracts' => 'getContracts',
        'links' => 'getLinks',
        'links_extended' => 'getLinksExtended',
        'whitepaper' => 'getWhitepaper',
        'first_data_at' => 'getFirstDataAt',
        'last_data_at' => 'getLastDataAt'
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
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('rank', $data ?? [], null);
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('team', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('open_source', $data ?? [], null);
        $this->setIfExists('hardware_wallet', $data ?? [], null);
        $this->setIfExists('started_at', $data ?? [], null);
        $this->setIfExists('development_status', $data ?? [], null);
        $this->setIfExists('proof_type', $data ?? [], null);
        $this->setIfExists('org_structure', $data ?? [], null);
        $this->setIfExists('hash_algorithm', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('platform', $data ?? [], null);
        $this->setIfExists('contracts', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('links_extended', $data ?? [], null);
        $this->setIfExists('whitepaper', $data ?? [], null);
        $this->setIfExists('first_data_at', $data ?? [], null);
        $this->setIfExists('last_data_at', $data ?? [], null);
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
     * @param string|null $id ID of coin on coinpaprika.com
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
     * @param string|null $name Name of the cryptocurrency
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
     * @param string|null $symbol Symbol of the cryptocurrency
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
     * Gets parent
     *
     * @return CoinParent|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param CoinParent|null $parent This field is deprecated. Use `contracts` field instead
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            array_push($this->openAPINullablesSetToNull, 'parent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank Current coin ranking position on coinpaprika.com
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
     * Gets is_new
     *
     * @return bool|null
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool|null $is_new Flag indicating if the currency was added within the last 5 days
     *
     * @return self
     */
    public function setIsNew($is_new)
    {
        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Flag indicating if the currency is active, which means that we can calculate the current price and volume
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the cryptocurrency. Currently supported values are `coin` and `token`
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Logo image URL
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Randomsymbols\Coinpaprika\Model\TagSimplified[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Randomsymbols\Coinpaprika\Model\TagSimplified[]|null $tags The array of tags to which this coin was assigned on coinpaprika.com
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \Randomsymbols\Coinpaprika\Model\PersonWithPosition[]|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \Randomsymbols\Coinpaprika\Model\PersonWithPosition[]|null $team The cryptocurrency founding and/or developing team
     *
     * @return self
     */
    public function setTeam($team)
    {
        if (is_null($team)) {
            throw new \InvalidArgumentException('non-nullable team cannot be null');
        }
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Text description of the cryptocurrency
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message An important message about current status of the cryptocurrency
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets open_source
     *
     * @return bool|null
     */
    public function getOpenSource()
    {
        return $this->container['open_source'];
    }

    /**
     * Sets open_source
     *
     * @param bool|null $open_source Set to true if the cryptocurrency is Open Source project
     *
     * @return self
     */
    public function setOpenSource($open_source)
    {
        if (is_null($open_source)) {
            throw new \InvalidArgumentException('non-nullable open_source cannot be null');
        }
        $this->container['open_source'] = $open_source;

        return $this;
    }

    /**
     * Gets hardware_wallet
     *
     * @return bool|null
     */
    public function getHardwareWallet()
    {
        return $this->container['hardware_wallet'];
    }

    /**
     * Sets hardware_wallet
     *
     * @param bool|null $hardware_wallet Set to true if the cryptocurrency is supported by any hardware wallet
     *
     * @return self
     */
    public function setHardwareWallet($hardware_wallet)
    {
        if (is_null($hardware_wallet)) {
            throw new \InvalidArgumentException('non-nullable hardware_wallet cannot be null');
        }
        $this->container['hardware_wallet'] = $hardware_wallet;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string|null $started_at Launch date of the cryptocurrency
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        if (is_null($started_at)) {
            array_push($this->openAPINullablesSetToNull, 'started_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('started_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets development_status
     *
     * @return string|null
     */
    public function getDevelopmentStatus()
    {
        return $this->container['development_status'];
    }

    /**
     * Sets development_status
     *
     * @param string|null $development_status Development status of the cryptocurrency - if it is a working project, beta version, just an idea, etc.
     *
     * @return self
     */
    public function setDevelopmentStatus($development_status)
    {
        if (is_null($development_status)) {
            array_push($this->openAPINullablesSetToNull, 'development_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('development_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['development_status'] = $development_status;

        return $this;
    }

    /**
     * Gets proof_type
     *
     * @return string|null
     */
    public function getProofType()
    {
        return $this->container['proof_type'];
    }

    /**
     * Sets proof_type
     *
     * @param string|null $proof_type Cryptocurrency proof type: Proof of Work, Proof of Stake, etc.
     *
     * @return self
     */
    public function setProofType($proof_type)
    {
        if (is_null($proof_type)) {
            array_push($this->openAPINullablesSetToNull, 'proof_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proof_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proof_type'] = $proof_type;

        return $this;
    }

    /**
     * Gets org_structure
     *
     * @return string|null
     */
    public function getOrgStructure()
    {
        return $this->container['org_structure'];
    }

    /**
     * Sets org_structure
     *
     * @param string|null $org_structure The cryptocurrency organization structure: centralized, decentralized, hierarchical, flat, etc.
     *
     * @return self
     */
    public function setOrgStructure($org_structure)
    {
        if (is_null($org_structure)) {
            array_push($this->openAPINullablesSetToNull, 'org_structure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('org_structure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['org_structure'] = $org_structure;

        return $this;
    }

    /**
     * Gets hash_algorithm
     *
     * @return string|null
     */
    public function getHashAlgorithm()
    {
        return $this->container['hash_algorithm'];
    }

    /**
     * Sets hash_algorithm
     *
     * @param string|null $hash_algorithm Name of the hash algorithm used by the cryptocurrency
     *
     * @return self
     */
    public function setHashAlgorithm($hash_algorithm)
    {
        if (is_null($hash_algorithm)) {
            array_push($this->openAPINullablesSetToNull, 'hash_algorithm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash_algorithm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hash_algorithm'] = $hash_algorithm;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract This field is deprecated. Use `contracts` field instead
     *
     * @return self
     */
    public function setContract($contract)
    {
        if (is_null($contract)) {
            array_push($this->openAPINullablesSetToNull, 'contract');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contract', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform This field is deprecated. Use `contracts` field instead
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        if (is_null($platform)) {
            array_push($this->openAPINullablesSetToNull, 'platform');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platform', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets contracts
     *
     * @return \Randomsymbols\Coinpaprika\Model\Contract[]|null
     */
    public function getContracts()
    {
        return $this->container['contracts'];
    }

    /**
     * Sets contracts
     *
     * @param \Randomsymbols\Coinpaprika\Model\Contract[]|null $contracts contracts
     *
     * @return self
     */
    public function setContracts($contracts)
    {
        if (is_null($contracts)) {
            throw new \InvalidArgumentException('non-nullable contracts cannot be null');
        }
        $this->container['contracts'] = $contracts;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Randomsymbols\Coinpaprika\Model\CoinLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Randomsymbols\Coinpaprika\Model\CoinLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets links_extended
     *
     * @return \Randomsymbols\Coinpaprika\Model\LinkExtended[]|null
     */
    public function getLinksExtended()
    {
        return $this->container['links_extended'];
    }

    /**
     * Sets links_extended
     *
     * @param \Randomsymbols\Coinpaprika\Model\LinkExtended[]|null $links_extended Contains all links of the `{coin_id}` coin together with statistics for some of them, e.g. number of twitter followers, reddit subscribers, telegram members or github repository stars and contributors
     *
     * @return self
     */
    public function setLinksExtended($links_extended)
    {
        if (is_null($links_extended)) {
            throw new \InvalidArgumentException('non-nullable links_extended cannot be null');
        }
        $this->container['links_extended'] = $links_extended;

        return $this;
    }

    /**
     * Gets whitepaper
     *
     * @return \Randomsymbols\Coinpaprika\Model\Whitepaper|null
     */
    public function getWhitepaper()
    {
        return $this->container['whitepaper'];
    }

    /**
     * Sets whitepaper
     *
     * @param \Randomsymbols\Coinpaprika\Model\Whitepaper|null $whitepaper whitepaper
     *
     * @return self
     */
    public function setWhitepaper($whitepaper)
    {
        if (is_null($whitepaper)) {
            throw new \InvalidArgumentException('non-nullable whitepaper cannot be null');
        }
        $this->container['whitepaper'] = $whitepaper;

        return $this;
    }

    /**
     * Gets first_data_at
     *
     * @return string|null
     */
    public function getFirstDataAt()
    {
        return $this->container['first_data_at'];
    }

    /**
     * Sets first_data_at
     *
     * @param string|null $first_data_at Date of the first available ticker data for the coin. RFC3999 (ISO-8601) format
     *
     * @return self
     */
    public function setFirstDataAt($first_data_at)
    {
        if (is_null($first_data_at)) {
            throw new \InvalidArgumentException('non-nullable first_data_at cannot be null');
        }
        $this->container['first_data_at'] = $first_data_at;

        return $this;
    }

    /**
     * Gets last_data_at
     *
     * @return string|null
     */
    public function getLastDataAt()
    {
        return $this->container['last_data_at'];
    }

    /**
     * Sets last_data_at
     *
     * @param string|null $last_data_at Date of the last available ticker data for the coin. RFC3999 (ISO-8601) format
     *
     * @return self
     */
    public function setLastDataAt($last_data_at)
    {
        if (is_null($last_data_at)) {
            throw new \InvalidArgumentException('non-nullable last_data_at cannot be null');
        }
        $this->container['last_data_at'] = $last_data_at;

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


