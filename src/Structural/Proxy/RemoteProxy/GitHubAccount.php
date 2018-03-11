<?php

namespace Patterns\Structural\Proxy\RemoteProxy;


class GitHubAccount implements GitHubAccountInterface
{
    /**
     * @var array
     */
    private $repositories;
    /**
     * @var string
     */
    private $username;

    /**
     * GitHubLocal constructor.
     * @param string $username
     * @param array $repositories
     */
    public function __construct(string $username, array $repositories = [])
    {
        $this->username = $username;
        $this->repositories = $repositories;
    }

    /**
     * @return array
     */
    public function getUserRepositories(): array
    {
        return $this->repositories;
    }
}