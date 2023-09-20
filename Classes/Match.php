<?php

namespace Classes;

use Classes\Event;

class Rencontre extends Event
{
    protected Team $team1;
    protected Team $team2;
    protected array $stats_rencontre;

    public function __construct(Team $team1, Team $team2, int $day, int $month, int $year)
    {
        parent::__construct($day, $month, $year);
        $this->team1=$team1;
        $this->team2=$team2;
    }

    public function setStatsRencontre(array $stats_rencontre): void
    {
        $this->stats_rencontre = $stats_rencontre;
    }

    public function getStatsRencontre(): array
    {
        return $this->stats_rencontre;
    }
}