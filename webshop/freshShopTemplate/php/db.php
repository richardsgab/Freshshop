<?php
    try
    {
        $db = new PDO('mysql:host=database;dbname=fshop;charset=utf8', 'root', 'root');
       
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
?>
