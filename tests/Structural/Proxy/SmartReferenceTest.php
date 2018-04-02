<?php

namespace Tests\Structural;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\Cache;
use Patterns\Structural\Proxy\FileSystem;
use Patterns\Structural\Proxy\SmartReference\AccountCachingProxy;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class SmartReferenceTest extends TestCase
{
    /**
     * @test
     */
    public function returns_cached_value_on_subsequent_calls()
    {
        $username = 'mchekin';
        $filesystem = new FileSystem();
        $userData = $filesystem->getData($username);

        /** @var Account|MockObject $account */
        $account = static::createMock(Account::class);
        $accountProtectionProxy = new AccountCachingProxy($account, new Cache());

        $account->expects($this->exactly(1))->method('getFirstName')->willReturn($userData['firstName']);

        $accountProtectionProxy->getFirstName();
        $accountProtectionProxy->getFirstName();
        $firstName = $accountProtectionProxy->getFirstName();

        static::assertEquals($userData['firstName'], $firstName);
    }
}