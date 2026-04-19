<?php

class Student {
    public $name;
    public $email;
    public $website;
    public $comment;
    public $gender;
}

$student = new Student();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student->name    = $_REQUEST["name"];
    $student->email   = $_REQUEST["email"];
    $student->website = $_REQUEST["website"];
    $student->comment = $_REQUEST["comment"];
    $student->gender  = isset($_REQUEST["gender"]) ? $_REQUEST["gender"] : "";

    if (empty($student->name)) {
        echo "Name is required";
    } else {
        echo "Name: " . $student->name;
    }

    echo "<br>";

    if (empty($student->email)) {
        echo "Email is required";
    } else {
        echo "Email: " . $student->email;
    }

    echo "<br>";

    if (empty($student->gender)) {
        echo "Gender is required";
    } else {
        echo "Gender: " . $student->gender;
    }

}

?>