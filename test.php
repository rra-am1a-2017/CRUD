<?php
  
  function sanitize($data) {
    $data = trim($data);  
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $testString = "    Rene van 't <b>Veld</b>      ";

  echo $testString;
  echo "<hr>";
  echo sanitize($testString);



?>