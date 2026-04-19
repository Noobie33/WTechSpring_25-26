<?php

session_start();

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

    if (!empty($student->name) && !empty($student->email) && !empty($student->gender)) {

        $_SESSION["name"]  = $student->name;
        $_SESSION["email"] = $student->email;

        setcookie('name',  $student->name,  time() + 3600, "/");
        setcookie('email', $student->email, time() + 3600, "/");

        echo "Form Submitted Successfully!";

    } else {

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

}

if (isset($_SESSION["name"]) || isset($_COOKIE["name"])) {
    echo "<br>";
    echo "Welcome Back: " . $_SESSION["name"];
} else {
    echo "<br>";
    echo "Please log in again!";
}

?>