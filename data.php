<?php
  echo "Hoi";
  var_dump($_POST);
  echo "Mijn voornaam is: " . $_POST["voornaam"] . " " . $_POST["tussenvoegsel"] . " " . $_POST["achternaam"] . "<br>";
  echo "Mijn password is: " . $_POST["wachtwoord"] . "<br>";
  echo "Mijn haarkleur is: " .$_POST["haarkleur"] . "<br>"; 
  echo "<hr>";

  // Echo onderstaande query naar het browserscherm 

  // We gaan contact maken in de code met de mysql database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1a_2017_blok2_crud";
  
  // Met deze functie maken we contact met de mysql server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // Dit is de query die de ingevulde gegevens kan wegschrijven naar de tabel users
  $sql = "INSERT INTO `users` (`id`,
                             `firstname`,
                             `middlename`,
                             `lastname`)
             VALUES         (NULL, 
                             '". $_POST["voornaam"] . "', 
                             '".$_POST["tussenvoegsel"]."', 
                             '".$_POST["achternaam"]."');";

  echo $sql;

  mysqli_query($conn, $sql);

  //header("Location: ./index.php");

  header("Refresh:4; url=./index.php");
  
?>
