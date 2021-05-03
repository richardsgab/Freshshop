<?php
include 'db.php';

$errorMSG = "";
$user_ok= "false";


if (isset($_POST['signinsubmit'])) {   
    
    $request = $db->query(" SELECT * FROM names ");
    while ($users = $request->fetch()) {       
        if (($users['name'] == $_POST['name'])  AND (password_verify($_POST['password'], $users['password']))) {
            $user_ok = true; 
        }  
        echo "Hola $name!";
    }
    $request->closeCursor();
    
    if ($user_ok) {     //Asigna variables de usuario y de sesion
        $name = $_POST['name'];
        $password = $_POST['password'];
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
    }               
    else {
        echo "Not yet a Registered User?<br> Sign In!";
    }    

}