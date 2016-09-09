<?php
/**
 * Created by PhpStorm.
 * User: Spencer
 * Date: 9/8/2016
 * Time: 4:45 PM
 */

include('Student.php');

$students = array();

$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student();
$third->surname = "Steve";
$third->first_name = "Jones";
$third->add_email('home','Steve@john.com');
$third->add_grade(75);
$students['s123'] = $third;

ksort($students);

foreach($students as $student)
    echo $student->toString();
