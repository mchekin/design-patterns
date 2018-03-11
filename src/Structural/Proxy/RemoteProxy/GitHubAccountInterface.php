<?php

namespace Patterns\Structural\Proxy\RemoteProxy;


interface GitHubAccountInterface
{
    /**
     * @return array
     */
    public function getUserRepositories(): array;
}