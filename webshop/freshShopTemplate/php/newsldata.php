<?php
include 'db.php';

if (isset($_POST['newslsubmit'])) {
    if (empty($_POST["Email"])) {
        $errorMSG .= "Email is required ";
    } else {
        $email = $_POST["Email"];
    }

    $request = $db->prepare('INSERT INTO newsltr(email) VALUES(?)');
    $request->execute(array($email));
    echo "Newsletter Ok!";
}