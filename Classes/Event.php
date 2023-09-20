<?php

namespace Classes;

class Event
{
    protected array $date ;

    public function __construct(int $day, int $month, int $year)
    {
        $this->date[]=$day;
        $this->date[]=$month;
        $this->date[]=$year;
    }


    public function getDate(): array
    {
        return $this->date;
    }


    public function setDate(array $date): void
    {
        $this->date = $date;
    }


}