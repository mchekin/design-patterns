<?php

namespace Tests\Structural;

use Patterns\Behavioral\Interpreter\AndExpression;
use Patterns\Behavioral\Interpreter\OrExpression;
use Patterns\Behavioral\Interpreter\TerminalExpression;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    /**
     * @test
     */
    public function interprets_successfully()
    {
        $blacksmithExpression = new TerminalExpression("Blacksmith");
        $masonExpression = new TerminalExpression("Mason");
        $tailorExpression = new TerminalExpression("Tailor");
        $masonOrTailorExpression = new OrExpression($masonExpression, $tailorExpression);
        $masonAndTailorExpression = new AndExpression($masonExpression, $tailorExpression);

        $allContext = "Masons, blacksmiths and tailors";
        $blacksmithContext = "Blacksmiths only";
        $masonContext = "Masons only";

        static::assertTrue($blacksmithExpression->interpret($blacksmithContext));
        static::assertTrue($masonAndTailorExpression->interpret($allContext));
        static::assertFalse($masonExpression->interpret($blacksmithContext));
        static::assertFalse($masonOrTailorExpression->interpret($blacksmithContext));
        static::assertFalse($masonAndTailorExpression->interpret($masonContext));
    }
}