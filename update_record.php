<?php
  //var_dump($_POST);
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");
  include("./functions/functions.php");  
  
  $voornaam       = sanitize($_POST["voornaam"]);
  $tussenvoegsel  = sanitize($_POST["tussenvoegsel"]);
  $achternaam     = sanitize($_POST["achternaam"]);
  $leeftijd       = sanitize($_POST["leeftijd"]);
  $id             = sanitize($_POST["id"]);


  // We maken een select query
  $sql = "UPDATE `users` 
             SET `firstname`  = '" . $voornaam .  "',
                 `middlename` = '" . $tussenvoegsel . "',
                 `lastname`   = '" . $achternaam . "',
                 `age`        = '" . $leeftijd . "' 
          WHERE  `id`         = " . $id;

  $result = mysqli_query($conn,$sql);

  header("Location: ./index.php");

?>