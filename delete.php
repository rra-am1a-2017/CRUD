<?php
  // We gaan contact maken in de code met de mysql database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1a_2017_blok2_crud";
  
  // Met deze functie maken we contact met de mysql server
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // We maken een select query
  $sql = "DELETE FROM `users` 
                WHERE `id` = " . $_GET["id"];

  // Vuur de sql-query af op de mysql-database
  $result = mysqli_query($conn,$sql);

  // Leidt de gebruiker terug naar de index.php pagina
  header("Location: ./index.php");
?>