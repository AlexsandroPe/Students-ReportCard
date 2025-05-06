<?php

class Boletim{
    private $grade;

    public function __construct($grade)
    {
        $this->grade = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }
}