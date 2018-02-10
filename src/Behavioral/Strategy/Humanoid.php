<?php

namespace Patterns\Behavioral\Strategy;

// the context
class Humanoid
{
    /**
     * @var string
     */
    private $skinColor;
    /**
     * @var integer
     */
    private $height;
    /**
     * @var bool
     */
    private $bearded;
    /**
     * @var bool
     */
    private $skinny;
    /**
     * @var ValidationStrategy
     */
    private $strategy;

    public function __construct(ValidationStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return bool
     */
    public function isValid() : bool
    {
        return $this->strategy->isValid($this);
    }

    /**
     * @return string
     */
    public function getSkinColor(): string
    {
        return $this->skinColor;
    }

    /**
     * @param string $skinColor
     * @return Humanoid
     */
    public function setSkinColor(string $skinColor) : Humanoid
    {
        $this->skinColor = $skinColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Humanoid
     */
    public function setHeight(int $height) : Humanoid
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isBearded(): bool
    {
        return $this->bearded;
    }

    /**
     * @param boolean $bearded
     * @return Humanoid
     */
    public function setBearded(bool $bearded) : Humanoid
    {
        $this->bearded = $bearded;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSkinny(): bool
    {
        return $this->skinny;
    }

    /**
     * @param boolean $skinny
     * @return Humanoid
     */
    public function setSkinny(bool $skinny) : Humanoid
    {
        $this->skinny = $skinny;
        return $this;
    }
}