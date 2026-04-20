<?php

session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";
$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = isset($_REQUEST["gender"]) ? $_REQUEST["gender"] : "";

    if (!empty($name) && !empty($email) && !empty($gender)) {

        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;

        setcookie('name', $name, time() + 3600, "/");
        setcookie('email', $email, time() + 3600, "/");

        echo "Form Submitted Successfully!";

        $formdata = array(
            "Name" => $name,
            "Email" => $email,
            "Website" => $website,
            "Comment" => $comment,  
            "Gender" => $gender
        );
        if (file_exists($datafile)) {
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata, true);
        } else {
            $tempdata = array();
        }
        if(!is_array($tempdata)){
            $tempdata=array();
        }

        $tempdata[]=$formdata;
        $jsondata=json_encode($tempdata, JSON_PRETTY_PRINT);

        if(file_put_contents($datafile, $jsondata)!==false){

        echo"Data saved.";
    
        }
        else{
            echo"Please try again.";
        }

        $data=file_get_contents($datafile);
        $mydata=json_decode($data,true);


    } else {

        if (empty($name)) {
            echo "Name is required";
        } else {
            echo "Name: " . $name;
        }

        echo "<br>";

        if (empty($email)) {
            echo "Email is required";
        } else {
            echo "Email: " . $email;
        }

        echo "<br>";

        if (empty($gender)) {
            echo "Gender is required";
        } else {
            echo "Gender: " . $gender;
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