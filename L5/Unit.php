<?php

class Unit
{
    private string $unitName;
    private int $lifLevel;
    private int $attackLevel;

    public function __construct(string $unitName, int $lifLevel, int $attackLevel)
    {
        $this->unitName = $unitName;
        $this->lifLevel = $lifLevel;
        $this->attackLevel = $attackLevel;
    }


    public function attack(Unit $anotherUnit): void
    {
        $anotherLifLevel = $anotherUnit->getLifLevel();
        $anotherLifLevel = $anotherLifLevel - $this->getAttackLevel();
        $anotherUnit->setLifLevel($anotherLifLevel);
    }
    /**
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @param string $unitName
     */
    public function setUnitName(string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * @return int
     */
    public function getLifLevel(): int
    {
        return $this->lifLevel;
    }

    /**
     * @param int $lifLevel
     */
    public function setLifLevel(int $lifLevel): void
    {
        $this->lifLevel = $lifLevel;
    }

    /**
     * @return int
     */
    public function getAttackLevel(): int
    {
        return $this->attackLevel;
    }

    /**
     * @param int $attackLevel
     */
    public function setAttackLevel(int $attackLevel): void
    {
        $this->attackLevel = $attackLevel;
    }




}