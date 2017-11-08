<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hier komt mijn eerste php code</h1>

    <?php
      // Dit zijn string variabelen 
      $voornaam = "Arjanus";
      $adres = "Prins Hendrikstraat 17";
      $woonplaats = 'Castricum';

      // Dit is
      // een variabele met daarin een geheel
      // getal (integer)
      $leeftijd = 17;
      $nieuwe_leeftijd = $leeftijd + 25;

      $fruit0 = "mango";
      $fruit1 = "ananas";
      $fruit2 = "banaan";

      /* Hieronder staat een 
         een array. */
      $fruit = array("appel", "citroen", "sinaasappel");

      echo "Mijn voornaam is: " . $voornaam . "<br>"; 
      echo "Ik woon in op de: " . $adres . "<br>";
      echo "Mijn woonplaats is: " . $woonplaats . "<br>";
      echo "Mijn leeftijd is: " . $leeftijd . " en over 25 jaar ben ik : " . $nieuwe_leeftijd . "<br>";
      echo "Het beste fruit ter wereld is: " . $fruit[0] ."<br>";
      echo "Daarna vind ik " . $fruit[1] . " het lekkerste.<br>";
      echo "Op de derde plaats komt dan: " . $fruit[2] . "<br>";

      echo "<hr>";
      // Associatief array
      $user = array("voornaam"      => "Arjan",
                    "tussenvoegsel" => "de", 
                    "achternaam"    => "Ruijter", "Prins Hendrikstraat", 17, "Castricum", '1901CB', 49);

      $zin = "Mijn naam is: " . $user['voornaam'] . " " . $user['tussenvoegsel'] . " " . $user['achternaam'] . "<br>";

      echo $zin;
      /* 
         Maak een array genaamd user waarin je de volgende data zet.
         voornaam, tussenvoegsel, achternaam, straatnaam, huisnummer, stad, postcode, leeftijd
         en maak een zin die al deze info weergeeft. Echo deze zin naar het scherm.
      */
    ?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>