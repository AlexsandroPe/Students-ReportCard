<?php

class Student {
    private $name;
    private $email;
    private $rm;
    private $grades;

    public function __construct($name, $rm, $email)
    {
        $this->name = $name;
        $this->rm = $rm;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRm()
    {
        return  $this->rm;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getGrades()
    {
        return $this->grades;   
         
    }

    public function setGrades($firstEx, $secondEx, $thirdEx)
    {
        $this->grades = [
            "ex1" => $firstEx,
            "ex2" => $secondEx,
            "ex3" => $thirdEx
        ];
    }
}