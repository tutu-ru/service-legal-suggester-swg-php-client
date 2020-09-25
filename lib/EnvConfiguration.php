<?php
/**
 * Configuration with the environment variables support
 * PHP version 7
 *
 * @category Class
 * @package  TutuRu\LegalSuggesterClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace TutuRu\LegalSuggesterClient;

use DCarbone\Go\Time;
use TutuRu\Config\ConfigInterface;
use TutuRu\HostAliasResolver\HostAliasResolver;

class EnvConfiguration extends Configuration
{
    public function __construct()
    {
        $this->debug = filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN);

        $envPrefix = strtoupper(self::getServiceName());

        $envHostName = $envPrefix . '_HOST';
        $envHost = getenv($envHostName);
        if ($envHost !== false) {
            $envScheme = getenv($envPrefix . '_HOST_SCHEME');
            $this->host = ($envScheme ?: 'http') . '://' . $envHost;
        } else {
            throw new \InvalidArgumentException($envHostName . ' must be specified.');
        }

        $envConnectTimeout = getenv($envPrefix . '_CONNECT_TIMEOUT');
        if ($envConnectTimeout !== false) {
            $this->connectTimeout = Time::ParseDuration($envConnectTimeout)->Seconds();
        } else {
            $this->connectTimeout = RecommendedTimeoutConfig::CONNECT_TIMEOUT;
        }

        $envReadTimeout = getenv($envPrefix . '_READ_TIMEOUT');
        if ($envReadTimeout !== false) {
            $this->readTimeout = Time::ParseDuration($envReadTimeout)->Seconds();
        } else {
            $this->readTimeout = RecommendedTimeoutConfig::READ_TIMEOUT;
        }

        parent::__construct();
    }

    public function getAppConfig(): ?ConfigInterface
    {
        return null;
    }

    public function getHostAliasResolver(): ?HostAliasResolver
    {
        return null;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        if (is_null($this->getDebugFile()) && defined('STDOUT') && !is_resource(STDOUT)) {
            return false;
        }
        return $this->debug;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return float
     */
    public function getTimeout()
    {
        if (is_null($this->timeout)) {
            $this->timeout = (float)($this->getConnectTimeout() + $this->getReadTimeout());
        }
        return $this->timeout;
    }

    /**
     * @return float
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @return float
     */
    public function getReadTimeout()
    {
        return $this->readTimeout;
    }
}
