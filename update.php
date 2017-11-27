<?php
  echo $_GET["id"];
?>

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
    <main class="container">

    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <h1>Wijzig het record</h1>
        <form method="post" action="./update.php">

          <div class="form-group">
            <label for="voornaamId">voornaam:</label>
            <input type="text" name="voornaam" id="voornaamId" class="form-control">         
          </div>

          <div class="form-group">
            <label for="tussenvoegselId">tussenvoegsel:</label>
            <input type="text" name="tussenvoegsel" id="tussenvoegselId" class="form-control">       
          </div>



              achternaam: <input type="text" name="achternaam"><br>
              leeftijd: <input type="number" name="leeftijd" min="0" max="600"><br>
              haarkleur <select name="haarkleur">
                          <option value="blond">blond haar</option>
                          <option value="grijs">grijs haar</option>
                          <option value="bruin">bruin haar</option>
                        </select><br>
              wachtwoord: <input type="password" name="wachtwoord"> <br>    
              <input type="submit"><br>
        </form>

      
      </div>
      <div class="col-3"></div>
    </div>


    
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>