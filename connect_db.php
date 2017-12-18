<?php
// **********************login gegevens van localhost***************************
// We gaan contact maken in de code met de mysql database
define("SERVER_NAME", "localhost");
define("USER_NAME", "rra_crud");
define("PASSWORD", "Geheim!");
define("DATABASE_NAME", "am1a_2017_blok2_crud");

// Met deze functie maken we contact met de mysql server
$conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
// *****************************************************************************

// **********************login gegevens van stateu.org**************************
// We gaan contact maken in de code met de mysql database
define("SERVER_NAME", "45.79.98.195");
define("USER_NAME", "crudstat_master");
define("PASSWORD", "Geheim!4");
define("DATABASE_NAME", "crudstat_rra");

// Met deze functie maken we contact met de mysql server
$conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
// *****************************************************************************
?>
