<?php
/**
 * TickersApi
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
 * TickersApi Class Doc Comment
 *
 * @category Class
 * @package  Randomsymbols\Coinpaprika
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TickersApi
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
        'getTickers' => [
            'application/json',
        ],
        'getTickersById' => [
            'application/json',
        ],
        'getTickersHistoricalById' => [
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
     * Operation getTickers
     *
     * Get tickers for all active coins
     *
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickers'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\Tick[]|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function getTickers($quotes = 'USD', string $contentType = self::contentTypes['getTickers'][0])
    {
        list($response) = $this->getTickersWithHttpInfo($quotes, $contentType);
        return $response;
    }

    /**
     * Operation getTickersWithHttpInfo
     *
     * Get tickers for all active coins
     *
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickers'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\Tick[]|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTickersWithHttpInfo($quotes = 'USD', string $contentType = self::contentTypes['getTickers'][0])
    {
        $request = $this->getTickersRequest($quotes, $contentType);

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
                    if ('\Randomsymbols\Coinpaprika\Model\Tick[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\Tick[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\Tick[]', []),
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

            $returnType = '\Randomsymbols\Coinpaprika\Model\Tick[]';
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
                        '\Randomsymbols\Coinpaprika\Model\Tick[]',
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
     * Operation getTickersAsync
     *
     * Get tickers for all active coins
     *
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersAsync($quotes = 'USD', string $contentType = self::contentTypes['getTickers'][0])
    {
        return $this->getTickersAsyncWithHttpInfo($quotes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTickersAsyncWithHttpInfo
     *
     * Get tickers for all active coins
     *
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersAsyncWithHttpInfo($quotes = 'USD', string $contentType = self::contentTypes['getTickers'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\Tick[]';
        $request = $this->getTickersRequest($quotes, $contentType);

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
     * Create request for operation 'getTickers'
     *
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTickersRequest($quotes = 'USD', string $contentType = self::contentTypes['getTickers'][0])
    {



        $resourcePath = '/tickers';
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
     * Operation getTickersById
     *
     * Get ticker for a specific coin
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\Tick|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function getTickersById($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['getTickersById'][0])
    {
        list($response) = $this->getTickersByIdWithHttpInfo($coin_id, $quotes, $contentType);
        return $response;
    }

    /**
     * Operation getTickersByIdWithHttpInfo
     *
     * Get ticker for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\Tick|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTickersByIdWithHttpInfo($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['getTickersById'][0])
    {
        $request = $this->getTickersByIdRequest($coin_id, $quotes, $contentType);

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
                    if ('\Randomsymbols\Coinpaprika\Model\Tick' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\Tick' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\Tick', []),
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

            $returnType = '\Randomsymbols\Coinpaprika\Model\Tick';
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
                        '\Randomsymbols\Coinpaprika\Model\Tick',
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
     * Operation getTickersByIdAsync
     *
     * Get ticker for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersByIdAsync($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['getTickersById'][0])
    {
        return $this->getTickersByIdAsyncWithHttpInfo($coin_id, $quotes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTickersByIdAsyncWithHttpInfo
     *
     * Get ticker for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersByIdAsyncWithHttpInfo($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['getTickersById'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\Tick';
        $request = $this->getTickersByIdRequest($coin_id, $quotes, $contentType);

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
     * Create request for operation 'getTickersById'
     *
     * @param  string $coin_id (required)
     * @param  string $quotes Comma separated list of quotes to return. Currently allowed values:  BTC, ETH, USD, EUR, PLN, KRW, GBP, CAD, JPY, RUB, TRY, NZD, AUD, CHF, UAH, HKD, SGD, NGN, PHP, MXN, BRL, THB, CLP, CNY, CZK, DKK, HUF, IDR, ILS, INR, MYR, NOK, PKR, SEK, TWD, ZAR, VND, BOB, COP, PEN, ARS, ISK (optional, default to 'USD')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTickersByIdRequest($coin_id, $quotes = 'USD', string $contentType = self::contentTypes['getTickersById'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling getTickersById'
            );
        }



        $resourcePath = '/tickers/{coin_id}';
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
     * Operation getTickersHistoricalById
     *
     * Get historical ticks for a specific coin
     *
     * @param  string $coin_id coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (optional, default to 'NOW')
     * @param  int $limit limit of result rows (max &#x60;5000&#x60;) (optional, default to 1000)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $interval returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) (optional, default to '5m')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersHistoricalById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Randomsymbols\Coinpaprika\Model\HistoricalTick[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError
     */
    public function getTickersHistoricalById($coin_id, $start, $end = 'NOW', $limit = 1000, $quote = 'usd', $interval = '5m', string $contentType = self::contentTypes['getTickersHistoricalById'][0])
    {
        list($response) = $this->getTickersHistoricalByIdWithHttpInfo($coin_id, $start, $end, $limit, $quote, $interval, $contentType);
        return $response;
    }

    /**
     * Operation getTickersHistoricalByIdWithHttpInfo
     *
     * Get historical ticks for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (optional, default to 'NOW')
     * @param  int $limit limit of result rows (max &#x60;5000&#x60;) (optional, default to 1000)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $interval returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) (optional, default to '5m')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersHistoricalById'] to see the possible values for this operation
     *
     * @throws \Randomsymbols\Coinpaprika\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Randomsymbols\Coinpaprika\Model\HistoricalTick[]|\Randomsymbols\Coinpaprika\Model\IdNotFoundError|\Randomsymbols\Coinpaprika\Model\TooManyRequestsError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTickersHistoricalByIdWithHttpInfo($coin_id, $start, $end = 'NOW', $limit = 1000, $quote = 'usd', $interval = '5m', string $contentType = self::contentTypes['getTickersHistoricalById'][0])
    {
        $request = $this->getTickersHistoricalByIdRequest($coin_id, $start, $end, $limit, $quote, $interval, $contentType);

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
                    if ('\Randomsymbols\Coinpaprika\Model\HistoricalTick[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Randomsymbols\Coinpaprika\Model\HistoricalTick[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Randomsymbols\Coinpaprika\Model\HistoricalTick[]', []),
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

            $returnType = '\Randomsymbols\Coinpaprika\Model\HistoricalTick[]';
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
                        '\Randomsymbols\Coinpaprika\Model\HistoricalTick[]',
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
     * Operation getTickersHistoricalByIdAsync
     *
     * Get historical ticks for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (optional, default to 'NOW')
     * @param  int $limit limit of result rows (max &#x60;5000&#x60;) (optional, default to 1000)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $interval returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) (optional, default to '5m')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersHistoricalById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersHistoricalByIdAsync($coin_id, $start, $end = 'NOW', $limit = 1000, $quote = 'usd', $interval = '5m', string $contentType = self::contentTypes['getTickersHistoricalById'][0])
    {
        return $this->getTickersHistoricalByIdAsyncWithHttpInfo($coin_id, $start, $end, $limit, $quote, $interval, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTickersHistoricalByIdAsyncWithHttpInfo
     *
     * Get historical ticks for a specific coin
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (optional, default to 'NOW')
     * @param  int $limit limit of result rows (max &#x60;5000&#x60;) (optional, default to 1000)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $interval returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) (optional, default to '5m')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersHistoricalById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTickersHistoricalByIdAsyncWithHttpInfo($coin_id, $start, $end = 'NOW', $limit = 1000, $quote = 'usd', $interval = '5m', string $contentType = self::contentTypes['getTickersHistoricalById'][0])
    {
        $returnType = '\Randomsymbols\Coinpaprika\Model\HistoricalTick[]';
        $request = $this->getTickersHistoricalByIdRequest($coin_id, $start, $end, $limit, $quote, $interval, $contentType);

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
     * Create request for operation 'getTickersHistoricalById'
     *
     * @param  string $coin_id (required)
     * @param  string $start start point for historical data #### Supported formats:    - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;    - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;    - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (required)
     * @param  string $end end point for historical data #### Supported formats:  - RFC3999 (ISO-8601) eg. &#x60;2018-02-15T05:15:00Z&#x60;  - Simple date (yyyy-mm-dd) eg. &#x60;2018-02-15&#x60;  - Unix timestamp (in seconds) eg. &#x60;1518671700&#x60; (optional, default to 'NOW')
     * @param  int $limit limit of result rows (max &#x60;5000&#x60;) (optional, default to 1000)
     * @param  string $quote returned data quote (available values: &#x60;usd&#x60; &#x60;btc&#x60;) (optional, default to 'usd')
     * @param  string $interval returned points interval (available values: &#x60;5m&#x60; &#x60;10m&#x60; &#x60;15m&#x60; &#x60;30m&#x60; &#x60;45m&#x60; &#x60;1h&#x60; &#x60;2h&#x60; &#x60;3h&#x60; &#x60;6h&#x60; &#x60;12h&#x60; &#x60;24h&#x60; &#x60;1d&#x60; &#x60;7d&#x60; &#x60;14d&#x60; &#x60;30d&#x60; &#x60;90d&#x60; &#x60;365d&#x60;) (optional, default to '5m')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTickersHistoricalById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTickersHistoricalByIdRequest($coin_id, $start, $end = 'NOW', $limit = 1000, $quote = 'usd', $interval = '5m', string $contentType = self::contentTypes['getTickersHistoricalById'][0])
    {

        // verify the required parameter 'coin_id' is set
        if ($coin_id === null || (is_array($coin_id) && count($coin_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coin_id when calling getTickersHistoricalById'
            );
        }

        // verify the required parameter 'start' is set
        if ($start === null || (is_array($start) && count($start) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start when calling getTickersHistoricalById'
            );
        }






        $resourcePath = '/tickers/{coin_id}/historical';
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
            $quote,
            'quote', // param base name
            'string', // openApiType
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
