<?php

namespace Patterns\Structural\Proxy\RemoteProxy;


use Patterns\Structural\Proxy\AccountInterface;
use Patterns\Structural\Proxy\HttpClient;

class AccountRemoteProxy implements AccountInterface
{
    /**
     * @var HttpClient
     */
    private $httpClient;
    /**
     * @var string
     */
    private $username;

    /**
     * GitHubProxy constructor.
     * @param HttpClient $httpClient
     * @param string $username
     */
    public function __construct(HttpClient $httpClient, string $username)
    {
        $this->httpClient = $httpClient;
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        $data = $this->httpClient->getData($this->username);

        return $data['firstName'] ?? '';
     }
}