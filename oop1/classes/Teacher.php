<?php

class Teacher
{
    public $title;
    public $firstname;
    public $lastname;
    public $dateOfBirth;
    public $subjects = [];

    public function __construct($title, $firstname, $lastname, $dateOfBirth)
    {
        $this->title = $title;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function showSubjects()
    {
        for ($i = 0; $i < count($this->subjects); $i++) {
            echo 'Předmět : ' . $this->subjects[$i] . '<br>';;
        }
    }
}
