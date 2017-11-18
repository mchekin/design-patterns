<?php

namespace Tests\Structural;

use Patterns\Structural\Adapter\FrenchPerson;
use Patterns\Structural\Adapter\FrenchPersonAdapter;
use Patterns\Structural\Adapter\GermanPerson;
use Patterns\Structural\Adapter\GermanPersonAdapter;
use Patterns\Structural\Adapter\RussianPerson;
use Patterns\Structural\Adapter\RussianPersonAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    /**
     * @test
     */
    public function adapts_successfully()
    {
        $germanPerson = new GermanPerson("Hermann", "Hesse");
        $frenchPerson = new FrenchPerson("Gustave", "Flaubert");
        $russianPerson = new RussianPerson("Leo", "Tolstoy");

        $russianPersonAdapter = new RussianPersonAdapter($russianPerson);
        $germanPersonAdapter = new GermanPersonAdapter($germanPerson);
        $frenchPersonAdapter = new FrenchPersonAdapter($frenchPerson);

        static::assertEquals("Hermann", $germanPersonAdapter->getFirstname());
        static::assertEquals("Hesse", $germanPersonAdapter->getLastname());

        static::assertEquals("Gustave", $frenchPersonAdapter->getFirstname());
        static::assertEquals("Flaubert", $frenchPersonAdapter->getLastname());

        static::assertEquals("Leo", $russianPersonAdapter->getFirstname());
        static::assertEquals("Tolstoy", $russianPersonAdapter->getLastname());
    }
}