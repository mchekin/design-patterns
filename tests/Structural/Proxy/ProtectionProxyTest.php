<?php

namespace Tests\Structural;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\FileSystem;
use Patterns\Structural\Proxy\ProtectionProxy\AccessLimitReachedException;
use Patterns\Structural\Proxy\ProtectionProxy\AccountProtectionProxy;
use PHPUnit\Framework\TestCase;

class ProtectionProxyTest extends TestCase
{
    /**
     * @test
     * @throws AccessLimitReachedException
     */
    public function returns_data_successfully_when_access_limit_exceeded_is_not_exceeded()
    {
        $accessLimit = 3;
        $username = 'mchekin';
        $filesystem = new FileSystem();
        $userData = $filesystem->getData($username);

        $account = new Account($filesystem, $username);

        $accountProtectionProxy = new AccountProtectionProxy($account, $accessLimit);

        $accountProtectionProxy->getFirstName();
        $accountProtectionProxy->getFirstName();
        $firstName = $accountProtectionProxy->getFirstName();

        static::assertEquals($userData['firstName'], $firstName);
    }
    /**
     * @test
     * @expectedException \Patterns\Structural\Proxy\ProtectionProxy\AccessLimitReachedException
     * @throws AccessLimitReachedException
     */
    public function throws_exception_when_access_limit_exceeded()
    {
        $username = 'mchekin';
        $accessLimit = 3;

        $account = new Account(new FileSystem(), $username);

        $accountProtectionProxy = new AccountProtectionProxy($account, $accessLimit);

        $accountProtectionProxy->getFirstName();
        $accountProtectionProxy->getFirstName();
        $accountProtectionProxy->getFirstName();
        $accountProtectionProxy->getFirstName();
    }
}