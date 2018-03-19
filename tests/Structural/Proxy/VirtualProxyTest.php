<?php

namespace Tests\Structural;

use Patterns\Structural\Proxy\FileSystem;
use Patterns\Structural\Proxy\VirtualProxy\AccountVirtualProxy;
use PHPUnit\Framework\TestCase;

class VirtualProxyTest extends TestCase
{
    /**
     * @test
     */
    public function loads_expensive_data_only_when_requested()
    {
        $username = 'mchekin';
        $filesystem = new FileSystem();
        $userData = $filesystem->getData($username);

        $accountGhostObject = new AccountVirtualProxy($filesystem, $username);

        /**
         * The wrapped attribute is initially empty
         */
        static::assertAttributeEmpty('wrapped', $accountGhostObject);

        $firstName = $accountGhostObject->getFirstName();

        /**
         * Only when the first call to retrieve the user data is made
         * the wrapped field has been populated with a Account object
         * which is built using expensive filesystem I/O operation to populate it data
         */
        static::assertAttributeNotEmpty('wrapped', $accountGhostObject);
        static::assertEquals($userData['firstName'], $firstName);
    }
}