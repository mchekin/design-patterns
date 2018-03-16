<?php

namespace Tests\Structural;

use Patterns\Structural\Proxy\RemoteProxy\RemoteAccount;
use Patterns\Structural\Proxy\RemoteProxy\AccountRemoteProxy;
use Patterns\Structural\Proxy\HttpClientMock;
use PHPUnit\Framework\TestCase;

class RemoteProxyTest extends TestCase
{
    /**
     * @test
     */
    public function gets_data_from_remote_server()
    {
        $username = 'mchekin';

        $client = new HttpClientMock();
        $userData = $client->getData($username);

        /**
         * This Remote Account illustarates data access on the remote server where data is available locally.
         */
        $remoteAccount = new RemoteAccount($userData, $username);
        $remoteFirstName = $remoteAccount->getFirstName();

        /**
         * This is a Remote Proxy which implements the same interface as the Remote Account
         * but gets it data through the network, using the HttpClient.
         * Outwardly it acts just like the real thing, but actually it gets it's data from a remote server.
         */
        $remoteProxy = new AccountRemoteProxy($client, $username);
        $firstName = $remoteProxy->getFirstName();

        static::assertEquals($remoteFirstName, $firstName);
    }
}