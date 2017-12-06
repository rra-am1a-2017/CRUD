<?php
  // echo $_GET["id"];
  // Opdracht zelf doen haal het record uit de database
  // We gaan contact maken in de code met de mysql database
  include("./connect_db.php");

  // We maken een select query die een record met een specifiek id selecteerd
  $sql = "SELECT * FROM `users` WHERE `id` = " . $_GET["id"];

  $result = mysqli_query($conn,$sql);

  $record = mysqli_fetch_assoc($result);

  // var_dump($record);

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
        <form method="post" action="./update_record.php">
          <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
          <div class="form-group">
            <label for="voornaamId">voornaam:</label>
            <input type="text"
                   name="voornaam" 
                   id="voornaamId" 
                   class="form-control"
                   value="<?php echo $record['firstname']; ?>">         
          </div>

          <div class="form-group">
            <label for="tussenvoegselId">tussenvoegsel:</label>
            <input type="text" 
                   name="tussenvoegsel" 
                   id="tussenvoegselId"  
                   class="form-control"
                   value="<?php echo $record['middlename']; ?>">       
          </div>

          <div class="form-group">
            <label for="achternaamId">achternaam:</label>
            <input type="text" 
                   name="achternaam" 
                   id="achternaamId" 
                   class="form-control"
                   value="<?php echo $record['lastname']; ?>">            
          </div>

          <div class="form-group">
            <label for="leeftijdId">leeftijd:</label>
            <input type="number" 
                   name="leeftijd" 
                   min="0" 
                   max="600" 
                   id="leeftijdId" 
                   class="form-control"
                   value="<?php echo $record['age']; ?>">            
          </div>

          <!--  
          <div class="form-group">
            <label for="haarkleurId">haarkleur:</label>
            <select name="haarkleur" id="haarkleurId"  class="form-control custom-select">
              <option value="blond">blond haar</option>
              <option value="grijs">grijs haar</option>
              <option value="bruin">bruin haar</option>
            </select>
          </div>

          <div class="form-group">
            <label for="wachtwoordId">wachtwoord:</label>
           <input type="password" name="wachtwoord" id="wachtwoordId" class="form-control">               
          </div>

          -->

          <button type="submit" class="btn btn-primary">wijzig!</button>
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