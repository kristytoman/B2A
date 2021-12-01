<?php

require_once(__DIR__.'/classes/Student.php');
require_once(__DIR__.'/classes/Teacher.php');

    $student1 = new Student('Václav', 'Gazda', 20/1/2004, 29/9/2021);
    $teacher1 = new Teacher('Ing.', 'Jan', 'koželuh', 27/8/1998);

    $student1->marks[0] = 1;
    $student1->marks[1] = 2;
    $student1->marks[2] = 1;

    $student1->showMarks($student1->marks);

    $teacher1->subjects[0] = 'Matematika';
    $teacher1->subjects[1] = 'Vlastivěda';
    $teacher1->subjects[2] = 'Prvouka';

    $teacher1->showSubjects($teacher1->subjects);
    