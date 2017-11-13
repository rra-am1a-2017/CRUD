<?php
  var_dump($_POST);
  echo "Hoi";
  echo "Mijn net ingevulde voornaam is: " . $_POST["voornaam"] . " " . $_POST["tussenvoegsel"] . " " . $_POST["achternaam"] . "<br>";
  echo "Mijn leeftijd is: " . $_POST["leeftijd"];

  // Met header refresh kun je even wachten voordat je geredirect wordt.
    header("refresh:10; url=./index.php");

  // Met header location kun je direct doorgestuurd worden.
  // header("Location: ./index.php");
?>