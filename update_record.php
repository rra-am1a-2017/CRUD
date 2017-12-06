<?php
  var_dump($_POST);
  // We gaan contact maken in de code met de mysql database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1a_2017_blok2_crud";
  
  // Met deze functie maken we contact met de mysql server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // We maken een select query
  $sql = "UPDATE `users` 
             SET `firstname`  = '" . $_POST["voornaam"]. "',
                 `middlename` = '" . $_POST["tussenvoegsel"]. "',
                 `lastname`   = '" . $_POST["achternaam"] . "',
                 `age`        = '" . $_POST["leeftijd"] . "' 
          WHERE  `id`         = " . $_POST["id"] ;

  $result = mysqli_query($conn,$sql);

  header("Location: ./index.php");

?>