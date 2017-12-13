<?php
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");

  // We maken een select query
  $sql = "DELETE FROM `users` 
                WHERE `id` = " . $_GET["id"];

  // echo $sql; exit();
  // Vuur de sql-query af op de mysql-database
  $result = mysqli_query($conn,$sql);

  // Leidt de gebruiker terug naar de index.php pagina
  header("Location: ./index.php");
?>