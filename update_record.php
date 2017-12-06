<?php
  //var_dump($_POST);
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");

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