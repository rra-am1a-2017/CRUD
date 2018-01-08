<?php
  //var_dump($_POST);
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");
  include("./functions/functions.php");  
  
  $voornaam       = sanitize($_POST["voornaam"]);
  $tussenvoegsel  = sanitize($_POST["tussenvoegsel"]);
  $achternaam     = sanitize($_POST["achternaam"]);
  $leeftijd       = sanitize($_POST["leeftijd"]);
  $wachtwoord     = sha1(sanitize($_POST["wachtwoord"]));
  $haarkleur      = sanitize($_POST["haarkleur"]);
  $id             = sanitize($_POST["id"]);


  // We maken een update query
  $sql = "UPDATE `users` 
             SET `firstname`  = '" . $voornaam .  "',
                 `middlename` = '" . $tussenvoegsel . "',
                 `lastname`   = '" . $achternaam . "',
                 `age`        = '" . $leeftijd . "',
                 `password`   = '" . $wachtwoord . "',
                 `haircolor`  = '" . $haarkleur . "'
          WHERE  `id`         = " . $id;

  $result = mysqli_query($conn,$sql);

  header("Location: ./index.php");

?>