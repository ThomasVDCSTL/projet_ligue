<?php

namespace Classes;

class Team
{
    protected Player $toplaner;
    protected Player $jungler;
    protected Player $midlaner;
    protected Player $adcarry;
    protected Player $support;

    public function __construct(Player $toplaner, Player $jungler, Player $midlaner, Player $adcarry, Player $support)
    {
        $this->toplaner=$toplaner;
        $this->jungler=$jungler;
        $this->midlaner=$midlaner;
        $this->adcarry=$adcarry;
        $this->support=$support;
    }

    /**
     * @return Player
     */
    public function getToplaner(): Player
    {
        return $this->toplaner;
    }

    /**
     * @param Player $toplaner
     */
    public function setToplaner(Player $toplaner): void
    {
        $this->toplaner = $toplaner;
    }

    /**
     * @return Player
     */
    public function getJungler(): Player
    {
        return $this->jungler;
    }

    /**
     * @param Player $jungler
     */
    public function setJungler(Player $jungler): void
    {
        $this->jungler = $jungler;
    }

    /**
     * @return Player
     */
    public function getMidlaner(): Player
    {
        return $this->midlaner;
    }

    /**
     * @param Player $midlaner
     */
    public function setMidlaner(Player $midlaner): void
    {
        $this->midlaner = $midlaner;
    }

    /**
     * @return Player
     */
    public function getAdcarry(): Player
    {
        return $this->adcarry;
    }

    /**
     * @param Player $adcarry
     */
    public function setAdcarry(Player $adcarry): void
    {
        $this->adcarry = $adcarry;
    }

    /**
     * @return Player
     */
    public function getSupport(): Player
    {
        return $this->support;
    }

    /**
     * @param Player $support
     */
    public function setSupport(Player $support): void
    {
        $this->support = $support;
    }


}