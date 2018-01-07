<?php
/**
 * Date: 1/7/2018
 * Time: 2:09 PM
 */
namespace Patterns\Behavioral\Interpreter;

interface ExpressionInterface
{
    /**
     * @param string $context
     * @return bool
     */
    public function interpret(string $context);
}