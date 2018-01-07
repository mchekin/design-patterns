<?php

/**
 * Date: 1/7/2018
 * Time: 1:32 PM
 */

namespace Patterns\Behavioral\Interpreter;

class TerminalExpression implements ExpressionInterface
{
    /**
     * @var string
     */
    private $data;

    /**
     * TerminalExpression constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $context
     * @return bool
     */
    public function interpret(string $context):bool
    {
        return strripos($context, $this->data) === false ? false : true;
    }
}