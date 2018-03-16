<?php

namespace Tests\Structural;

use Patterns\Structural\Proxy\GhostObject\AccountGhostObject;
use Patterns\Structural\Proxy\FileSystemMock;
use PHPUnit\Framework\TestCase;

class GhostObjectTest extends TestCase
{
    /**
     * @test
     */
    public function loads_expensive_data_only_when_requested()
    {
        $username = 'mchekin';
        $filesystem = new FileSystemMock();
        $userData = $filesystem->getData($username);

        $account = new AccountGhostObject($filesystem, $username);

        /**
         * The data attribute is initially empty
         */
        static::assertAttributeEmpty('data', $account);

        $firstName = $account->getFirstName();

        /**
         * Only after the first call to retrieve the user data
         * the data field has been populated using expensive I/O operation
         */
        static::assertAttributeNotEmpty('data', $account);
        static::assertEquals($userData['firstName'], $firstName);
    }
}