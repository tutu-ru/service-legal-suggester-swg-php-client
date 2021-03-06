<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  TutuRu\LegalSuggesterClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* Service suggestions api
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TutuRu\LegalSuggesterClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use TutuRu\LegalSuggesterClient\ApiException;
use TutuRu\LegalSuggesterClient\Configuration;
use TutuRu\LegalSuggesterClient\EnvConfiguration;
use TutuRu\LegalSuggesterClient\HeaderSelector;
use TutuRu\LegalSuggesterClient\ObjectSerializer;
use TutuRu\LegalSuggesterClient\QueryMetricCollector;
use TutuRu\Metrics\StatsdExporterAwareInterface;
use TutuRu\Metrics\StatsdExporterAwareTrait;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  TutuRu\LegalSuggesterClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi implements LoggerAwareInterface, StatsdExporterAwareInterface
{
    use LoggerAwareTrait;
    use StatsdExporterAwareTrait;


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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client(['handler' => $this->config->getHandlerStack()]);
        $this->headerSelector = $selector ?: new HeaderSelector();
        $logger = $this->config->getDefaultLogger();
        if (!is_null($logger)) {
            $this->setLogger($logger);
        }
        $statsdExporterClient = $this->config->getDefaultStatsdExporterClient();
        if (!is_null($statsdExporterClient)) {
            $this->setStatsdExporterClient($statsdExporterClient);
        }
    }

    public static function fromEnv(ClientInterface $client = null, HeaderSelector $selector = null): self
    {
        return new static($client, new EnvConfiguration(), $selector);
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation legalSuggesterServiceSuggestionsSearchGet
     *
     * Поиск юр. лиц
     *
     * @param  string $query Запрос, для которого нужно получить подсказки (required)
     * @param  string $count Максимальное кол-во найденных совпадений (required)
     *
     * @throws \TutuRu\LegalSuggesterClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TutuRu\LegalSuggesterClient\Model\Suggestion[]
     */
    public function legalSuggesterServiceSuggestionsSearchGet($query, $count)
    {
        list($response) = $this->legalSuggesterServiceSuggestionsSearchGetWithHttpInfo($query, $count);
        return $response;
    }

    /**
     * Operation legalSuggesterServiceSuggestionsSearchGetWithHttpInfo
     *
     * Поиск юр. лиц
     *
     * @param  string $query Запрос, для которого нужно получить подсказки (required)
     * @param  string $count Максимальное кол-во найденных совпадений (required)
     *
     * @throws \TutuRu\LegalSuggesterClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TutuRu\LegalSuggesterClient\Model\Suggestion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function legalSuggesterServiceSuggestionsSearchGetWithHttpInfo($query, $count)
    {
        $dataCollector = new QueryMetricCollector(Configuration::getServiceName(), 'legalSuggesterServiceSuggestionsSearchGet', QueryMetricCollector::QUERY_TYPE_SYNC);
        $dataCollector->startTiming();

        $returnType = '\TutuRu\LegalSuggesterClient\Model\Suggestion[]';
        $request = $this->legalSuggesterServiceSuggestionsSearchGetRequest($query, $count);

        $debugOutput = null;
        try {
            $options = $this->createHttpClientOption();
            try {
                if ($this->config->getDebug()) {
                    if (!is_null($this->logger)) {
                        $this->logger->info(
                            "Start request to " . Configuration::getServiceName(),
                            [
                                'request'     => $request->getBody()->getContents(),
                                'target_host' => $this->config->getHost(),
                                'target_uri'  => (string)$request->getUri()
                            ]
                        );
                    }
                    ob_start();
                }
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBodyContent = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null;
                $message = $responseBodyContent ?? $e->getMessage();
                throw new ApiException(
                    "[{$e->getCode()}] {$message}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $responseBodyContent
                );
            } finally {
                if ($this->config->getDebug()) {
                    $debugOutput = ob_get_contents();
                    ob_end_clean();
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $dataCollector->endTiming();
            $dataCollector->saveResult(QueryMetricCollector::QUERY_RESULT_SUCCESS);
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $responseBody->rewind();
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            $dataCollector->endTiming();
            $dataCollector->saveResult($e->getCode());
            if (!is_null($this->logger)) {
                $this->logger->error(
                    "{$e}",
                    [
                        'code'        => $e->getCode(),
                        'response'    => $e->getResponseBody(),
                        'request'     => $request->getBody()->getContents(),
                        'target_host' => $this->config->getHost(),
                        'target_uri'  => (string)$request->getUri(),
                        'debug'       => $debugOutput,
                        'request_time'=> $dataCollector->getTiming()
                    ]
                );
            }

            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\TutuRu\LegalSuggesterClient\Model\Suggestion[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\TutuRu\LegalSuggesterClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $content,
                        '\TutuRu\LegalSuggesterClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        } catch (\Throwable $e) {
            $dataCollector->endTiming();
            $dataCollector->saveResult(QueryMetricCollector::QUERY_RESULT_UNKNOWN);
            if (!is_null($this->logger)) {
                $this->logger->error(
                    "{$e}",
                    [
                        'code'        => QueryMetricCollector::QUERY_RESULT_UNKNOWN,
                        'response'    => '',
                        'request'     => $request->getBody()->getContents(),
                        'target_host' => $this->config->getHost(),
                        'target_uri'  => (string)$request->getUri(),
                        'debug'       => $debugOutput,
                        'request_time'=> $dataCollector->getTiming()
                    ]
                );
            }

            throw $e;
        } finally {
            if (!is_null($this->statsdExporterClient)) {
                $dataCollector->sendToStatsdExporter($this->statsdExporterClient);
            }
        }
    }

    /**
     * Operation legalSuggesterServiceSuggestionsSearchGetAsync
     *
     * Поиск юр. лиц
     *
     * @param  string $query Запрос, для которого нужно получить подсказки (required)
     * @param  string $count Максимальное кол-во найденных совпадений (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalSuggesterServiceSuggestionsSearchGetAsync($query, $count)
    {
        return $this->legalSuggesterServiceSuggestionsSearchGetAsyncWithHttpInfo($query, $count)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation legalSuggesterServiceSuggestionsSearchGetAsyncWithHttpInfo
     *
     * Поиск юр. лиц
     *
     * @param  string $query Запрос, для которого нужно получить подсказки (required)
     * @param  string $count Максимальное кол-во найденных совпадений (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legalSuggesterServiceSuggestionsSearchGetAsyncWithHttpInfo($query, $count)
    {
        $dataCollector = new QueryMetricCollector(Configuration::getServiceName(), 'legalSuggesterServiceSuggestionsSearchGet', QueryMetricCollector::QUERY_TYPE_ASYNC);
        $dataCollector->startTiming();

        $returnType = '\TutuRu\LegalSuggesterClient\Model\Suggestion[]';
        $request = $this->legalSuggesterServiceSuggestionsSearchGetRequest($query, $count);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType, $dataCollector) {
                    $dataCollector->endTiming();
                    $dataCollector->saveResult(QueryMetricCollector::QUERY_RESULT_SUCCESS);
                    if (!is_null($this->statsdExporterClient)) {
                        $dataCollector->sendToStatsdExporter($this->statsdExporterClient);
                    }
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $responseBody->rewind();
                        $content = $responseBody->getContents();
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
                function ($exception) use ($dataCollector, $request) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    $dataCollector->endTiming();
                    $dataCollector->saveResult($statusCode);
                    if (!is_null($this->statsdExporterClient)) {
                        $dataCollector->sendToStatsdExporter($this->statsdExporterClient);
                    }
                    if (!is_null($this->logger)) {
                        $this->logger->error(
                            "{$exception}",
                            [
                                'code'        => $statusCode,
                                'response'    => $response->getBody()->getContents(),
                                'request'     => $request->getBody()->getContents(),
                                'target_host' => $this->config->getHost(),
                                'target_uri'  => (string)$request->getUri()
                            ]
                        );
                    }

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'legalSuggesterServiceSuggestionsSearchGet'
     *
     * @param  string $query Запрос, для которого нужно получить подсказки (required)
     * @param  string $count Максимальное кол-во найденных совпадений (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function legalSuggesterServiceSuggestionsSearchGetRequest($query, $count)
    {
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling legalSuggesterServiceSuggestionsSearchGet'
            );
        }
        // verify the required parameter 'count' is set
        if ($count === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $count when calling legalSuggesterServiceSuggestionsSearchGet'
            );
        }

        $resourcePath = '/legal_suggester_service/suggestions/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
        $options = [
            'timeout'         => $this->config->getTimeout(),
            'connect_timeout' => $this->config->getConnectTimeout(),
            'read_timeout'    => $this->config->getReadTimeout(),
        ];
        if ($this->config->getDebug()) {
            if (!is_null($this->config->getDebugFile())) {
                $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            } else {
                $options[RequestOptions::DEBUG] = true;
            }
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
