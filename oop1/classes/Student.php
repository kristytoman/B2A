<?php

class Student
{
    public $firstname;
    public $lastname;
    public $dateOfBirth;
    public $dateOfEnroll;
    public $marks = [];

    public function __construct($firstname, $lastname, $dateOfBirth, $dateOfEnroll)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfEnroll = $dateOfEnroll;
    }

    public function showMarks() {
        for($i = 0; $i < count($this->marks); $i++) {
            echo 'Známka: '.$this->marks[$i].'<br>';
        }
    }
}
