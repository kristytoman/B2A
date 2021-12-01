<?php
require_once(__DIR__ . '/School.php');
class Student extends School
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

    public function sayInfo()
    {
        echo 'Jmenuji se '.$this->firstname.' '.$this->lastname.'<br>';
    }
}
