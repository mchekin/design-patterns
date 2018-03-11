<?php

namespace Patterns\Structural\Proxy\RemoteProxy;


use Github\Client;

class GitHubAccountRemoteProxy implements GitHubAccountInterface
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var string
     */
    private $username;

    /**
     * GitHubProxy constructor.
     * @param Client $client
     * @param string $username
     */
    public function __construct(Client $client, string $username)
    {
        $this->client = $client;
        $this->username = $username;
    }

    /**
     * @return array
     */
    public function getUserRepositories(): array
    {
        return $this->client->api('user')->repositories($this->username);
    }
}