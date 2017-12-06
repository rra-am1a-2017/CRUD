<?php
  // echo "Hoi";
  // var_dump($_POST);
  // echo "Mijn voornaam is: " . $_POST["voornaam"] . " " . $_POST["tussenvoegsel"] . " " . $_POST["achternaam"] . "<br>";
  // echo "Mijn password is: " . $_POST["wachtwoord"] . "<br>";
  // echo "Mijn haarkleur is: " .$_POST["haarkleur"] . "<br>"; 
  // echo "<hr>";

  // Echo onderstaande query naar het browserscherm 

  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");

  function sanatize($name) {
    $output = "Mijn voornaam is: " . $name;
    echo "Hoi";
    return $output;
  }

  $naam = "Bert";
  echo sanatize($_POST["tussenvoegsel"]);

  // Dit is de query die de ingevulde gegevens kan wegschrijven naar de tabel users
  $sql = "INSERT INTO `users` (`id`,
                               `firstname`,
                               `middlename`,
                               `lastname`,
                               `age`)
             VALUES         (NULL, 
                             '" . $_POST["voornaam"] . "', 
                             '" . $_POST["tussenvoegsel"] . "', 
                             '" . $_POST["achternaam"]. "',
                             " . $_POST["leeftijd"] .");";

  //echo $sql; exit();

  mysqli_query($conn, $sql);

  //header("Location: ./index.php");
  echo "De ingevoerde gegevens zijn opgeslagen in de database";

  header("Refresh:2; url=./index.php");
  
?>
