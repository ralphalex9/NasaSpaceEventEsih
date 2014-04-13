<?php


 try{
      $connect = new PDO("mysql:host=localhost;dbname=nasaspace","root","Parson_89");
       // echo "Good";
      }catch(PDOException $e) {
       echo "Erreur: ";
    }
?>