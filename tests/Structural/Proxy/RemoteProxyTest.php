<?php

namespace Tests\Structural;

use Github\Client;
use Patterns\Structural\Proxy\RemoteProxy\GitHubAccount;
use Patterns\Structural\Proxy\RemoteProxy\GitHubAccountRemoteProxy;
use PHPUnit\Framework\TestCase;

class RemoteProxyTest extends TestCase
{
    /**
     * @test
     */
    public function gets_data_from_remote_server()
    {
        $username = 'mchekin';
        $client = new Client();
        $repositories = $client->api('user')->repositories($username);

        /**
         * This illustrates the local access to the repositories data on the GitHub server itself,
         * since we cannot really add this implementation on the GitHub server.
         */
        $local = new GitHubAccount($username, $repositories);
        $localRepositories = $local->getUserRepositories();

        /**
         * This is a Remote Proxy which implements the same interface as the real GitHubAccount
         * but gets it data from a the GitHub server.
         * So outwardly it acts just like the real thing, but actually it gets it's data from a remote server.
         */
        $remoteProxy = new GitHubAccountRemoteProxy($client, $username);
        $remoteRepositories = $remoteProxy->getUserRepositories();

        static::assertEquals($localRepositories, $remoteRepositories);
    }
}