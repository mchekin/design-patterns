<?php

namespace Tests\Creational;

use Exception;
use Patterns\Creational\Singleton\Config;
use PHPUnit\Framework\Error\Warning;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @test
     */
    public function gettingInstanceMultipleTimesReturnsTheSameInstance()
    {
        // Arrange

        // Act
        $configInstance1 = Config::getInstance();
        $configInstance2 = Config::getInstance();

        // Assert
        self::assertSame(Config::class, get_class($configInstance1));
        self::assertSame($configInstance1, $configInstance2);
    }

    /**
     * @test
     */
    public function tryingToUnSerializeFails()
    {
        $expectedExceptionMessage = 'Invalid callback Patterns\Creational\Singleton\Config::__wakeup, '
            . 'cannot access private method Patterns\Creational\Singleton\Config::__wakeup()';

        $configInstance = Config::getInstance();
        $serializedConfig = serialize($configInstance);

        try {
            unserialize($serializedConfig);
        }
        catch (Exception $exception)
        {
            self::assertSame(Warning::class, get_class($exception));
            self::assertSame($expectedExceptionMessage, $exception->getMessage());
        }
    }
}