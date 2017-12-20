<?php
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");
  include("./functions/functions.php");  

  $voornaam       = sanitize($_POST["voornaam"]);
  $tussenvoegsel  = sanitize($_POST["tussenvoegsel"]);
  $achternaam     = sanitize($_POST["achternaam"]);
  $leeftijd       = sanitize($_POST["leeftijd"]);
  $wachtwoord     = sha1(sanitize($_POST["wachtwoord"]));
  $haarkleur      = sanitize($_POST["haarkleur"]);

  // Dit is de query die de ingevulde gegevens kan wegschrijven naar de tabel users
  $sql = "INSERT INTO `users` (`id`,
                               `firstname`,
                               `middlename`,
                               `lastname`,
                               `age`,
                               `password`,
                               `haircolor`)
             VALUES         (NULL, 
                             '" . $voornaam ."', 
                             '" . $tussenvoegsel . "', 
                             '" . $achternaam . "',
                             "  . $leeftijd .",
                             '" . $wachtwoord . "',
                             '" . $haarkleur . "');";
  
  // echo $sql; exit();

  mysqli_query($conn, $sql);

  header("Location: ./index.php");
  
  
  //echo "De ingevoerde gegevens zijn opgeslagen in de database";

  //header("Refresh:2; url=./index.php");
  
?>
