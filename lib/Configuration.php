<?php
/**
 * Configuration
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

namespace TutuRu\LegalSuggesterClient;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;
use TutuRu\Config\ConfigInterface;
use TutuRu\HostAliasResolver\HostAliasResolver;
use TutuRu\HttpRequestMetadata\RequestMetadataHandler;
use TutuRu\Metrics\StatsdExporterClientInterface;
use TutuRu\RequestMetadata\RequestMetadata;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  TutuRu\LegalSuggesterClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host;

    /**
     * @var HostAliasResolver
     */
    protected $hostAliasResolver;

    /**
     * @var ConfigInterface
     */
    protected $appConfig;

    /**
     * @var RequestMetadata
     */
    protected $requestMetadata;

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     *
     * @var string
     */
    protected $userAgent = 'Swagger-Codegen/1.0.0/php';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = null;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = null;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * @link http://docs.guzzlephp.org/en/stable/request-options.html#timeout
     *
     * @var float
     */
    protected $timeout;

    /**
     * @link http://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout
     *
     * @var float
     */
    protected $connectTimeout;

    /**
     * @link http://docs.guzzlephp.org/en/stable/request-options.html#read-timeout
     *
     * @var float
     */
    protected $readTimeout;

    /**
     * @var HandlerStack
     */
    protected $handlerStack;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }


    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setAppConfig(ConfigInterface $appConfig)
    {
        $this->appConfig = $appConfig;
        return $this;
    }


    public function getAppConfig(): ?ConfigInterface
    {
        if (is_null($this->appConfig)) {
            // we are in monolith compatible environment and have Config as dependency
            if (function_exists('fConfig')) {
                $this->appConfig = fConfig();
            }
        }
        return $this->appConfig;
    }


    public function setRequestMetadata(RequestMetadata $requestMetadata)
    {
        $this->requestMetadata = $requestMetadata;
        return $this;
    }


    public function getRequestMetadata(): ?RequestMetadata
    {
        if (is_null($this->requestMetadata)) {
            // we are in monolith compatible environment and have XRequestId as dependency
            if (function_exists('fXRequestId')) {
                $this->requestMetadata = fXRequestId();
            }
        }
        return $this->requestMetadata;
    }


    public function setHostAliasResolver(HostAliasResolver $hostAliasResolver)
    {
        $this->hostAliasResolver = $hostAliasResolver;
        return $this;
    }


    public function getHostAliasResolver(): ?HostAliasResolver
    {
        if (is_null($this->hostAliasResolver)) {
            if (!is_null($this->getAppConfig())) {
                $this->hostAliasResolver = new HostAliasResolver($this->getAppConfig());
            }
        }
        return $this->hostAliasResolver;
    }


    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     * @throws \TutuRu\HostAliasResolver\HostAliasResolverException
     */
    public function getHost()
    {
        if (is_null($this->host) && !is_null($this->getHostAliasResolver())) {
            $this->host = $this->getHostAliasResolver()->getHostByAlias(strtolower(self::getServiceName()));
        }
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        if (is_null($this->debug)) {
            if (is_null($this->getDebugFile()) && defined('STDOUT') && !is_resource(STDOUT)) {
                // bugfix for processes with closed STDOUT
                $this->debug = false;
            } else {
                if (!is_null($this->getAppConfig())) {
                    $node = 'rest.services.' . strtolower(self::getServiceName()) . '.debug';
                    $this->debug = (bool)($this->getAppConfig()->getValue($node) ?? false);
                } else {
                    $this->debug = false;
                }
            }
        }
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * @param float $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeout()
    {
        if (is_null($this->timeout)) {
            if (!is_null($this->getAppConfig())) {
                $node = 'rest.services.' . strtolower(self::getServiceName()) . '.timeout';
                $this->timeout = $this->getAppConfig()->getValue($node) ?? (float)($this->getConnectTimeout() + $this->getReadTimeout());
            } else {
                $this->timeout = (float)($this->getConnectTimeout() + $this->getReadTimeout());
            }
        }
        return $this->timeout;
    }

    /**
     * @param float $connectTimeout
     *
     * @return $this
     */
    public function setConnectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * @return float
     */
    public function getConnectTimeout()
    {
        if (is_null($this->connectTimeout)) {
            if (!is_null($this->getAppConfig())) {
                $node = 'rest.services.' . strtolower(self::getServiceName()) . '.connect_timeout';
                $this->connectTimeout = $this->getAppConfig()->getValue($node) ?? 1;
            } else {
                $this->connectTimeout = 1;
            }
        }
        return $this->connectTimeout;
    }

    /**
     * @param float $readTimeout
     *
     * @return $this
     */
    public function setReadTimeout($readTimeout)
    {
        $this->readTimeout = $readTimeout;
        return $this;
    }

    /**
     * @return float
     */
    public function getReadTimeout()
    {
        if (is_null($this->readTimeout)) {
            if (!is_null($this->getAppConfig())) {
                $node = 'rest.services.' . strtolower(self::getServiceName()) . '.read_timeout';
                $this->readTimeout = $this->getAppConfig()->getValue($node) ?? RecommendedTimeoutConfig::READ_TIMEOUT;
            } else {
                $this->readTimeout = RecommendedTimeoutConfig::READ_TIMEOUT;
            }
        }
        return $this->readTimeout;
    }

    /**
     * @return HandlerStack
     */
    public function getHandlerStack()
    {
        if (is_null($this->handlerStack)) {
            $this->handlerStack = HandlerStack::create();
            if (!is_null($this->getRequestMetadata())) {
                $this->handlerStack->push(
                    Middleware::mapRequest(
                        function (RequestInterface $request) {
                            return (new RequestMetadataHandler($this->getRequestMetadata()))->addToRequest($request);
                        }
                    )
                );
            }
        }
        return $this->handlerStack;
    }

    public function setHandlerStack(HandlerStack $handlerStack)
    {
        $this->handlerStack = $handlerStack;
    }

    public function getDefaultLogger(): ?LoggerInterface
    {
        // we are in monolith compatible environment and have Log as dependency
        if (function_exists('fLog')) {
            return fLog()->createPsrLogger(strtolower(self::getServiceName()) . "_client");
        } else {
            return null;
        }
    }

    public function getDefaultStatsdExporterClient(): ?StatsdExporterClientInterface
    {
        // we are in monolith compatible environment and have StatsD as dependency
        if (function_exists('fStatsD')) {
            return fStatsD()->getStatsdExporterClient();
        } else {
            return null;
        }
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    public static function getServiceName()
    {
        return preg_replace("/^[\w]+\\\(.+)Client$/", "$1", 'TutuRu\LegalSuggesterClient');
    }

    /**
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (TutuRu\LegalSuggesterClient) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 1.0.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
