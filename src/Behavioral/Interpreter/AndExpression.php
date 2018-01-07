<?php

/**
 * Date: 1/7/2018
 * Time: 1:32 PM
 */

namespace Patterns\Behavioral\Interpreter;

class AndExpression implements ExpressionInterface
{
    /**
     * @var ExpressionInterface
     */
    private $firstExpression;
    /**
     * @var ExpressionInterface
     */
    private $secondExpression;

    /**
     * TerminalExpression constructor.
     * @param ExpressionInterface $firstExpression
     * @param ExpressionInterface $secondExpression
     */
    public function __construct(ExpressionInterface $firstExpression, ExpressionInterface $secondExpression)
    {
        $this->firstExpression = $firstExpression;
        $this->secondExpression = $secondExpression;
    }

    /**
     * @param string $context
     * @return bool
     */
    public function interpret(string $context):bool 
    {
        return $this->firstExpression->interpret($context) && $this->secondExpression->interpret($context);
    }
}