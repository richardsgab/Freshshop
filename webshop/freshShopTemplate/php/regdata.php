<?php
include 'db.php';

$errorMSG = "";

if (isset($_POST['regsubmit'])) { 
    if (empty($_POST["name"])) {
        $errorMSG = "Name is required ";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $errorMSG .= "Email is required ";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $errorMSG .= "Password is required ";
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    }

    if (empty($_POST["passwordrepeat"])) {
        $errorMSG .= "Re Enter your Password is required ";
    } else {
        $passwordrepeat = $_POST["passwordrepeat"];
    }
 
    

    $request = $db->prepare('INSERT INTO users(name, email, password, passwordrepeat) VALUES(?, ?, ?, ?)'); //prepare add command
    $request->execute(array($name, $email, $password, $passwordrepeat)); // add new element in database
    echo "Register Ok!";
}