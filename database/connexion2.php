<?php 
    try{
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=phpdebutants','root','');

    }catch (PDOException $ex) {
        echo 'Erreur :'.$ex; 
        die();
    }

?>