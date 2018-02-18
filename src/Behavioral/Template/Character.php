<?php

namespace Patterns\Behavioral\Template;

class Character
{
    /**
     * @var string
     */
    private $headdress = '';
    /**
     * @var string
     */
    private $upperBodyGarment = '';
    /**
     * @var string
     */
    private $lowerBodyGarment = '';
    /**
     * @var string
     */
    private $underwear = '';
    /**
     * @var string
     */
    private $socks = '';
    /**
     * @var string
     */
    private $footwear = '';
    /**
     * @var array
     */
    private $extraGarments =[];

    /**
     * @return string
     */
    public function getHeaddress(): string
    {
        return $this->headdress;
    }

    /**
     * @return string
     */
    public function getUpperBodyGarment(): string
    {
        return $this->upperBodyGarment;
    }

    /**
     * @return string
     */
    public function getLowerBodyGarment(): string
    {
        return $this->lowerBodyGarment;
    }

    /**
     * @return string
     */
    public function getUnderwear(): string
    {
        return $this->underwear;
    }

    /**
     * @return string
     */
    public function getSocks(): string
    {
        return $this->socks;
    }

    /**
     * @return string
     */
    public function getFootwear(): string
    {
        return $this->footwear;
    }

    /**
     * @return array
     */
    public function getExtraGarments(): array
    {
        return $this->extraGarments;
    }

    /**
     * @param string $headdress
     * @return Character
     */
    public function setHeaddress(string $headdress): Character
    {
        $this->headdress = $headdress;
        return $this;
    }

    /**
     * @param string $upperBodyGarment
     * @return Character
     */
    public function setUpperBodyGarment(string $upperBodyGarment): Character
    {
        $this->upperBodyGarment = $upperBodyGarment;
        return $this;
    }

    /**
     * @param string $lowerBodyGarment
     * @return Character
     */
    public function setLowerBodyGarment(string $lowerBodyGarment): Character
    {
        $this->lowerBodyGarment = $lowerBodyGarment;
        return $this;
    }

    /**
     * @param string $underwear
     * @return Character
     */
    public function setUnderwear(string $underwear): Character
    {
        $this->underwear = $underwear;
        return $this;
    }

    /**
     * @param string $socks
     * @return Character
     */
    public function setSocks(string $socks): Character
    {
        $this->socks = $socks;
        return $this;
    }

    /**
     * @param string $footwear
     * @return Character
     */
    public function setFootwear(string $footwear): Character
    {
        $this->footwear = $footwear;
        return $this;
    }

    /**
     * @param array $extraGarments
     * @return Character
     */
    public function setExtraGarments(array $extraGarments): Character
    {
        $this->extraGarments = $extraGarments;
        return $this;
    }
}