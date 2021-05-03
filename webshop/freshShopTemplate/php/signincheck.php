<?php
    include_once('db.php');
    $name = $_POST['name'];

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, name, password, valid FROM users WHERE name = :name');
    $req->execute(array(
        'name' => $name));
    $resultat = $req->fetch();

    //check password
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
    $isValid = $resultat['valid'];

    if(!$resultat) { //if entered pseudo doesn't exist in db
        $_POST['error'] = 'Mauvais identifiant ou mot de passe !';
        header("location: sign-in.php?error=0");
    } else {
        if($isPasswordCorrect && $isValid) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['name'] = $name;
            
            header("Location: /index.php");  //CAMBIAR INDEX POR MY-ACCOUNT?????
        }
        else if($isPasswordCorrect && ($isValid != 1)) {
            $_POST['error'] = '<p>Your account is not activated yet. <br> Please check you inbox mail and follow the link</p>';
            header("location: signin.php?error=1"); //CREAR ERROR??????
        } else {
            $_POST['error'] = 'Mauvais identifiant ou mot de passe !';
            header("location: signin.php?error=0");
        }
    }
?>