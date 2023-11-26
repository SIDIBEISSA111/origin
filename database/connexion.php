<?php

$conbd= new PDO('mysql:host=localhost;dbname=phpdebutants', 'root', '');

  if (!$conbd) {
       echo "Echec de connexion";
       }else{

           echo "Vous etes connecté à la base de données";
       }
 
?>

