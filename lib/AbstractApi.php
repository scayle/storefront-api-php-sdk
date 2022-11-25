<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Exceptions\InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractApi
{
    const VERSION = '1.0.0';

    const API_URL = 'apiUrl';

    const AUTH = 'auth';
    const AUTH_TYPE = 'type';
    const AUTH_TOKEN = 'token';
    const AUTH_USERNAME = 'username';
    const AUTH_PASSWORD = 'password';
    const AUTH_HEADER_NAME = 'X-Access-Token';

    const SHOP_ID = 'shopId';
    const SHOP_HEADER_NAME = 'X-Shop-Id';

    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var array<string, string>
     */
    private $config;

    /**
     * AbstractAdminApi constructor.
     * @param array<string, string> $config
     * @example ['apiUrl' => 'http://cloud.aboutyou.com', 'accessToken' => 'myToken']
     * @param ClientInterface $httpClient
     */
    public function __construct($config = [], $httpClient = null)
    {
        $this->validateConfig($config);

        $this->config = $config;
        $this->httpClient = $httpClient ?: new Client();
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->config[self::API_URL];
    }

    /**
     * @return array
     */
    public function getAuth()
    {
        return $this->config[self::AUTH];
    }

    /**
    * @return string
    */
    public function getShopId()
    {
        return $this->config[self::SHOP_ID];
    }

/**
* @param string $method
     * @param string $relativePath
     * @param array<string, string> $options
     * @param null|string $body
     *
     * @return ResponseInterface
     *
     * @throws ClientExceptionInterface
     */
    public function request($method, $relativePath, $options = [], $body = null)
    {
        $url = $this->getApiUrl() . $relativePath . $this->makeQueryString($options);

        $headers = $this->getAuthHeader();
        $headers[self::SHOP_HEADER_NAME] = $this->getShopId();
        $headers['Content-Type'] = 'application/json';
        $headers['Accept'] = 'application/json, */*';
        $headers['X-SDK'] = 'php/' . self::VERSION;

        $request = new Request($method, $url, $headers, $body);
        return $this->httpClient->sendRequest($request);
    }

    private function getAuthHeader()
    {
        $auth = $this->getAuth();
        if (array_key_exists(self::AUTH_TOKEN, $auth)) {
            return [
                self::AUTH_HEADER_NAME => $auth[self::AUTH_TOKEN],
            ];
        }

        $credentials = base64_encode($auth[self::AUTH_USERNAME] . ':' . $auth[self::AUTH_PASSWORD]);

        return [
            'Authorization' => 'Basic ' . $credentials,
        ];
    }

    private function makeQueryString(array $options): string
    {
        if (empty($options)) {
            return '';
        }

        foreach ($options as &$value) {
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
        }

        unset($value);

        return '?' . http_build_query($options);
    }

    /**
     * @param array<string, string> $config
     *
     * @throws InvalidArgumentException
     */
    private function validateConfig($config)
    {
        if (empty($config[self::API_URL])) {
            $message = sprintf('%s cannot be empty', self::API_URL);
            throw new InvalidArgumentException($message);
        }

        if (empty($config[self::SHOP_ID])) {
            $message = sprintf('%s cannot be empty', self::SHOP_ID);
            throw new InvalidArgumentException($message);
        }

        if (empty($config[self::AUTH])) {
            $message = sprintf('%s cannot be empty', self::AUTH);
            throw new InvalidArgumentException($message);
        }

        $auth = $config[self::AUTH];
        if ((empty($auth[self::AUTH_TYPE]) || empty($auth[self::AUTH_TOKEN])) && (empty($auth[self::AUTH_USERNAME]) || empty($auth[self::AUTH_PASSWORD]))) {
            $message = sprintf('%s array must consist of either type and token or username and password', self::AUTH);
            throw new InvalidArgumentException($message);
        }
    }
}
