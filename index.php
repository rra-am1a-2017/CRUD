<!doctype html>
<html lang="en">
  <head>
    <title>CRUD met PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
      <h1>Vul uw gegevens in:</h1>

      <?php
        // We maken contact met de mysql-database
        include("./connect_db.php");
        
        // We maken een select query
        $sql = "SELECT * FROM `users`";

        $result = mysqli_query($conn,$sql);

        //$record = mysqli_fetch_assoc($result);

        //var_dump($record);
        
        $table_data = "";
        while ($record = mysqli_fetch_assoc($result)) {
          //var_dump($record);
          $table_data = $table_data . "<tr>
                                          <td>" . $record['id'] . "</td>
                                          <td>" . $record["firstname"]. "</td>
                                          <td>" . $record["middlename"] . "</td>
                                          <td>" . $record["lastname"] . "</td>
                                          <td>" . $record["age"] . "</td>
                                          <td>" . $record["haircolor"] . "</td>
                                          <td>
                                            <a href='./update.php?id=" . $record["id"] . "'>
                                              <img src='./img/edit.png' alt='wijzig record'>
                                            </a>
                                          </td>
                                          <td>
                                            <a href='./delete.php?id=" . $record["id"] . "'>
                                              <img src='./img/drop.png' alt='delete record'>
                                            </a>
                                          </td>
                                       </tr>";
        }

      ?>
      
      <form method="post" action="./data.php">
          <div class="form-group">
            <label for="voornaamId">voornaam:</label>
            <input type="text"
                   name="voornaam" 
                   id="voornaamId" 
                   class="form-control"
                   value="<?php echo $record['firstname']; ?>"
                   required>         
          </div>

          <div class="form-group">
            <label for="tussenvoegselId">tussenvoegsel:</label>
            <input type="text" 
                   name="tussenvoegsel" 
                   id="tussenvoegselId"  
                   class="form-control"
                   value="<?php echo $record['middlename']; ?>"
                   required>       
          </div>

          <div class="form-group">
            <label for="achternaamId">achternaam:</label>
            <input type="text" 
                   name="achternaam" 
                   id="achternaamId" 
                   class="form-control"
                   value="<?php echo $record['lastname']; ?>"
                   required>            
          </div>

          <div class="form-group">
            <label for="leeftijdId">leeftijd:</label>
            <input type="number" 
                   name="leeftijd" 
                   min="0" 
                   max="600" 
                   id="leeftijdId" 
                   class="form-control"
                   value="<?php echo $record['age']; ?>"
                   required>            
          </div>

           
          <div class="form-group">
            <label for="haarkleurId">haarkleur:</label>
            <select name="haarkleur" id="haarkleurId"  class="form-control custom-select" required>
              <option value="">--kies een haarkleur--</option>            
              <option value="blond">blond haar</option>
              <option value="grijs">grijs haar</option>
              <option value="bruin">bruin haar</option>
            </select>
          </div>

          <div class="form-group">
            <label for="wachtwoordId">wachtwoord:</label>
           <input type="password" name="wachtwoord" id="wachtwoordId" class="form-control" required>               
          </div>

         

          <button type="submit" class="btn btn-primary btn-large btn-block">Opslaan</button>
      </form>

      <hr> 

      <table class="table table-hover">
        <thead>
          <tr>
            <th>id</th>
            <th>voornaam</th>
            <th>tussenvoegsel</th>
            <th>achternaam</th>
            <th>leeftijd</th>
            <th>haarkleur</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php echo $table_data; ?>
        </tbody>
      </table>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>