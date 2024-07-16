<?php
/**
 * CoinsApi
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

namespace Randomsymbols\Coinpaprika\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Randomsymbols\Coinpaprika\ApiException;
use Randomsymbols\Coinpaprika\Configuration;
use Randomsymbols\Coinpaprika\HeaderSelector;
use Randomsymbols\Coinpaprika\ObjectSerializer;

/**
 * CoinsApi Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CoinsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'coinsCoinIdEventsGet' => [
            'application/json',
        ],
        'coinsCoinIdExchangesGet' => [
            'application/json',
        ],
        'coinsCoinIdMarketsGet' => [
            'application/json',
        ],
        'coinsCoinIdOhlcvHistoricalGet' => [
            'application/json',
        ],
        'coinsCoinIdOhlcvLatestGet' => [
            'application/json',
        ],
        'coinsCoinIdOhlcvTodayGet' => [
            'application/json',
        ],
        'coinsCoinIdTwitterGet' => [
            'application/json',
        ],
        'coinsGet' => [
            'application/json',
        ],
        'getCoinById' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation coinsCoinIdEventsGet
     *
     * Get coin events by coin ID
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdEventsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\Event[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdEventsGet($coin_id, string $contentType = self::contentTypes['coinsCoinIdEventsGet'][0])
    {
        list($response) = $this->coinsCoinIdEventsGetWithHttpInfo($coin_id, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdEventsGetWithHttpInfo
     *
     * Get coin events by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdEventsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\Event[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdEventsGetWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdEventsGet'][0])
    {
        $request = $this->coinsCoinIdEventsGetRequest($coin_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\Event[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\Event[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\Event[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\Event[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\Event[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdEventsGetAsync
     *
     * Get coin events by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdEventsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdEventsGetAsync($coin_id, string $contentType = self::contentTypes['coinsCoinIdEventsGet'][0])
    {
        return $this->coinsCoinIdEventsGetAsyncWithHttpInfo($coin_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdEventsGetAsyncWithHttpInfo
     *
     * Get coin events by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdEventsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdEventsGetAsyncWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdEventsGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\Event[]';
        $request = $this->coinsCoinIdEventsGetRequest($coin_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdEventsGet'
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdEventsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdEventsGetRequest($coin_id, string $contentType = self::contentTypes['coinsCoinIdEventsGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdEventsGet'
            );
        }


        $resourcePath = '/coins/{coin_id}/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdExchangesGet
     *
     * Get exchanges by coin ID
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdExchangesGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdExchangesGet($coin_id, string $contentType = self::contentTypes['coinsCoinIdExchangesGet'][0])
    {
        list($response) = $this->coinsCoinIdExchangesGetWithHttpInfo($coin_id, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdExchangesGetWithHttpInfo
     *
     * Get exchanges by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdExchangesGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdExchangesGetWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdExchangesGet'][0])
    {
        $request = $this->coinsCoinIdExchangesGetRequest($coin_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdExchangesGetAsync
     *
     * Get exchanges by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdExchangesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdExchangesGetAsync($coin_id, string $contentType = self::contentTypes['coinsCoinIdExchangesGet'][0])
    {
        return $this->coinsCoinIdExchangesGetAsyncWithHttpInfo($coin_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdExchangesGetAsyncWithHttpInfo
     *
     * Get exchanges by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdExchangesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdExchangesGetAsyncWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdExchangesGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\ExchangeWithShare[]';
        $request = $this->coinsCoinIdExchangesGetRequest($coin_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdExchangesGet'
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdExchangesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdExchangesGetRequest($coin_id, string $contentType = self::contentTypes['coinsCoinIdExchangesGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdExchangesGet'
            );
        }


        $resourcePath = '/coins/{coin_id}/exchanges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdMarketsGet
     *
     * Get markets by coin ID
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdMarketsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\CoinMarket[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdMarketsGet($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['coinsCoinIdMarketsGet'][0])
    {
        list($response) = $this->coinsCoinIdMarketsGetWithHttpInfo($coin_id, $quotes, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdMarketsGetWithHttpInfo
     *
     * Get markets by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdMarketsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\CoinMarket[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdMarketsGetWithHttpInfo($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['coinsCoinIdMarketsGet'][0])
    {
        $request = $this->coinsCoinIdMarketsGetRequest($coin_id, $quotes, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\CoinMarket[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\CoinMarket[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\CoinMarket[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\CoinMarket[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\CoinMarket[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdMarketsGetAsync
     *
     * Get markets by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdMarketsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdMarketsGetAsync($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['coinsCoinIdMarketsGet'][0])
    {
        return $this->coinsCoinIdMarketsGetAsyncWithHttpInfo($coin_id, $quotes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdMarketsGetAsyncWithHttpInfo
     *
     * Get markets by coin ID
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdMarketsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdMarketsGetAsyncWithHttpInfo($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['coinsCoinIdMarketsGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\CoinMarket[]';
        $request = $this->coinsCoinIdMarketsGetRequest($coin_id, $quotes, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdMarketsGet'
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdMarketsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdMarketsGetRequest($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['coinsCoinIdMarketsGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdMarketsGet'
            );
        }



        $resourcePath = '/coins/{coin_id}/markets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $quotes,
            'quotes', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdOhlcvHistoricalGet
     *
     * Get historical OHLC
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter (optional)
     * @param  int $limit limit of result rows (max &#x60;366&#x60;) (optional, default to 1)
     * @param  string $interval returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) (optional, default to '24h')
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvHistoricalGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdOhlcvHistoricalGet($coin_id, $start, $end = null, $limit = 1, $interval = '24h', $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvHistoricalGet'][0])
    {
        list($response) = $this->coinsCoinIdOhlcvHistoricalGetWithHttpInfo($coin_id, $start, $end, $limit, $interval, $quote, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdOhlcvHistoricalGetWithHttpInfo
     *
     * Get historical OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter (optional)
     * @param  int $limit limit of result rows (max &#x60;366&#x60;) (optional, default to 1)
     * @param  string $interval returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) (optional, default to '24h')
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvHistoricalGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdOhlcvHistoricalGetWithHttpInfo($coin_id, $start, $end = null, $limit = 1, $interval = '24h', $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvHistoricalGet'][0])
    {
        $request = $this->coinsCoinIdOhlcvHistoricalGetRequest($coin_id, $start, $end, $limit, $interval, $quote, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdOhlcvHistoricalGetAsync
     *
     * Get historical OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter (optional)
     * @param  int $limit limit of result rows (max &#x60;366&#x60;) (optional, default to 1)
     * @param  string $interval returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) (optional, default to '24h')
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvHistoricalGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvHistoricalGetAsync($coin_id, $start, $end = null, $limit = 1, $interval = '24h', $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvHistoricalGet'][0])
    {
        return $this->coinsCoinIdOhlcvHistoricalGetAsyncWithHttpInfo($coin_id, $start, $end, $limit, $interval, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdOhlcvHistoricalGetAsyncWithHttpInfo
     *
     * Get historical OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter (optional)
     * @param  int $limit limit of result rows (max &#x60;366&#x60;) (optional, default to 1)
     * @param  string $interval returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) (optional, default to '24h')
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvHistoricalGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvHistoricalGetAsyncWithHttpInfo($coin_id, $start, $end = null, $limit = 1, $interval = '24h', $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvHistoricalGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
        $request = $this->coinsCoinIdOhlcvHistoricalGetRequest($coin_id, $start, $end, $limit, $interval, $quote, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdOhlcvHistoricalGet'
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for ohlcv (max 1 year) #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60;   If not provided calculated by the limit parameter (optional)
     * @param  int $limit limit of result rows (max &#x60;366&#x60;) (optional, default to 1)
     * @param  string $interval returned OHLCV point interval (available values: &#x60;15m&#x60;, &#x60;30m&#x60;, &#x60;1h&#x60;, &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;) (optional, default to '24h')
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvHistoricalGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdOhlcvHistoricalGetRequest($coin_id, $start, $end = null, $limit = 1, $interval = '24h', $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvHistoricalGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdOhlcvHistoricalGet'
            );
        }

        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling coinsCoinIdOhlcvHistoricalGet'
            );
        }






        $resourcePath = '/coins/{coin_id}/ohlcv/historical';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start,
            'start', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end,
            'end', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $interval,
            'interval', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $quote,
            'quote', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdOhlcvLatestGet
     *
     * Get OHLC for the last full day
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvLatestGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdOhlcvLatestGet($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvLatestGet'][0])
    {
        list($response) = $this->coinsCoinIdOhlcvLatestGetWithHttpInfo($coin_id, $quote, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdOhlcvLatestGetWithHttpInfo
     *
     * Get OHLC for the last full day
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvLatestGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdOhlcvLatestGetWithHttpInfo($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvLatestGet'][0])
    {
        $request = $this->coinsCoinIdOhlcvLatestGetRequest($coin_id, $quote, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdOhlcvLatestGetAsync
     *
     * Get OHLC for the last full day
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvLatestGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvLatestGetAsync($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvLatestGet'][0])
    {
        return $this->coinsCoinIdOhlcvLatestGetAsyncWithHttpInfo($coin_id, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdOhlcvLatestGetAsyncWithHttpInfo
     *
     * Get OHLC for the last full day
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvLatestGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvLatestGetAsyncWithHttpInfo($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvLatestGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
        $request = $this->coinsCoinIdOhlcvLatestGetRequest($coin_id, $quote, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdOhlcvLatestGet'
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvLatestGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdOhlcvLatestGetRequest($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvLatestGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdOhlcvLatestGet'
            );
        }



        $resourcePath = '/coins/{coin_id}/ohlcv/latest/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $quote,
            'quote', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdOhlcvTodayGet
     *
     * Get today OHLC
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvTodayGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdOhlcvTodayGet($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvTodayGet'][0])
    {
        list($response) = $this->coinsCoinIdOhlcvTodayGetWithHttpInfo($coin_id, $quote, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdOhlcvTodayGetWithHttpInfo
     *
     * Get today OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvTodayGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdOhlcvTodayGetWithHttpInfo($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvTodayGet'][0])
    {
        $request = $this->coinsCoinIdOhlcvTodayGetRequest($coin_id, $quote, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdOhlcvTodayGetAsync
     *
     * Get today OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvTodayGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvTodayGetAsync($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvTodayGet'][0])
    {
        return $this->coinsCoinIdOhlcvTodayGetAsyncWithHttpInfo($coin_id, $quote, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdOhlcvTodayGetAsyncWithHttpInfo
     *
     * Get today OHLC
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvTodayGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdOhlcvTodayGetAsyncWithHttpInfo($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvTodayGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\CoinsOhlcv[]';
        $request = $this->coinsCoinIdOhlcvTodayGetRequest($coin_id, $quote, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdOhlcvTodayGet'
     *
     * @param  string $coin_id (required)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdOhlcvTodayGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdOhlcvTodayGetRequest($coin_id, $quote = 'usd', string $contentType = self::contentTypes['coinsCoinIdOhlcvTodayGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdOhlcvTodayGet'
            );
        }



        $resourcePath = '/coins/{coin_id}/ohlcv/today/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $quote,
            'quote', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsCoinIdTwitterGet
     *
     * Get Twitter timeline tweets for a coin
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdTwitterGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\Twitter[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsCoinIdTwitterGet($coin_id, string $contentType = self::contentTypes['coinsCoinIdTwitterGet'][0])
    {
        list($response) = $this->coinsCoinIdTwitterGetWithHttpInfo($coin_id, $contentType);
        return $response;
    }

    /**
     * Operation coinsCoinIdTwitterGetWithHttpInfo
     *
     * Get Twitter timeline tweets for a coin
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdTwitterGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\Twitter[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsCoinIdTwitterGetWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdTwitterGet'][0])
    {
        $request = $this->coinsCoinIdTwitterGetRequest($coin_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\Twitter[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\Twitter[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\Twitter[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\Twitter[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\Twitter[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsCoinIdTwitterGetAsync
     *
     * Get Twitter timeline tweets for a coin
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdTwitterGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdTwitterGetAsync($coin_id, string $contentType = self::contentTypes['coinsCoinIdTwitterGet'][0])
    {
        return $this->coinsCoinIdTwitterGetAsyncWithHttpInfo($coin_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsCoinIdTwitterGetAsyncWithHttpInfo
     *
     * Get Twitter timeline tweets for a coin
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdTwitterGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsCoinIdTwitterGetAsyncWithHttpInfo($coin_id, string $contentType = self::contentTypes['coinsCoinIdTwitterGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\Twitter[]';
        $request = $this->coinsCoinIdTwitterGetRequest($coin_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsCoinIdTwitterGet'
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsCoinIdTwitterGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsCoinIdTwitterGetRequest($coin_id, string $contentType = self::contentTypes['coinsCoinIdTwitterGet'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling coinsCoinIdTwitterGet'
            );
        }


        $resourcePath = '/coins/{coin_id}/twitter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation coinsGet
     *
     * List coins
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\Currency[]|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function coinsGet(string $contentType = self::contentTypes['coinsGet'][0])
    {
        list($response) = $this->coinsGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation coinsGetWithHttpInfo
     *
     * List coins
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsGet'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\Currency[]|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function coinsGetWithHttpInfo(string $contentType = self::contentTypes['coinsGet'][0])
    {
        $request = $this->coinsGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\Currency[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\Currency[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\Currency[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\Currency[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\Currency[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation coinsGetAsync
     *
     * List coins
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsGetAsync(string $contentType = self::contentTypes['coinsGet'][0])
    {
        return $this->coinsGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation coinsGetAsyncWithHttpInfo
     *
     * List coins
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function coinsGetAsyncWithHttpInfo(string $contentType = self::contentTypes['coinsGet'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\Currency[]';
        $request = $this->coinsGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'coinsGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['coinsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function coinsGetRequest(string $contentType = self::contentTypes['coinsGet'][0])
    {


        $resourcePath = '/coins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCoinById
     *
     * Get coin by ID
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCoinById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\CoinExtended|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function getCoinById($coin_id, string $contentType = self::contentTypes['getCoinById'][0])
    {
        list($response) = $this->getCoinByIdWithHttpInfo($coin_id, $contentType);
        return $response;
    }

    /**
     * Operation getCoinByIdWithHttpInfo
     *
     * Get coin by ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCoinById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\CoinExtended|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCoinByIdWithHttpInfo($coin_id, string $contentType = self::contentTypes['getCoinById'][0])
    {
        $request = $this->getCoinByIdRequest($coin_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Randomsymbols\Coinpaprika\Model\CoinExtended' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\CoinExtended' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\CoinExtended', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\IdNotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\IdNotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\TooManyRequestsError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Randomsymbols\Coinpaprika\Model\CoinExtended';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\CoinExtended',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\IdNotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Randomsymbols\Coinpaprika\Model\TooManyRequestsError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCoinByIdAsync
     *
     * Get coin by ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCoinById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCoinByIdAsync($coin_id, string $contentType = self::contentTypes['getCoinById'][0])
    {
        return $this->getCoinByIdAsyncWithHttpInfo($coin_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCoinByIdAsyncWithHttpInfo
     *
     * Get coin by ID
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCoinById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCoinByIdAsyncWithHttpInfo($coin_id, string $contentType = self::contentTypes['getCoinById'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\CoinExtended';
        $request = $this->getCoinByIdRequest($coin_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCoinById'
     *
     * @param  string $coin_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCoinById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCoinByIdRequest($coin_id, string $contentType = self::contentTypes['getCoinById'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling getCoinById'
            );
        }


        $resourcePath = '/coins/{coin_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($coin_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coin_id' . '}',
                ObjectSerializer::toPathValue($coin_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
