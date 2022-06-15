<?php include "db.php"; ?>

<?php 

if(isset($_POST['submit'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];

      $query = "INSERT INTO users(username,password) ";
      $query .= "VALUES ('$username','$password')";

      $result =    mysqli_query($connection, $query);

      if (!$result) {
        die('Query Faild'); 
      }

}



?>



<!doctype html>
<html lang="en">
  <head>
    <title>Login Create</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item ">
                  <a class="nav-link" href="http://localhost/cms/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/cms/form/form.php">Form</a>
              </li>
              <li class="nav-item " >
                  <a class="nav-link" href="http://localhost/cms/mysql/login.php">Login</a>
              </li>
                <li class="nav-item active " >
                  <a class="nav-link" href="http://localhost/cms/mysql/login_create.php">Login create</a>
              </li>
              <li class="nav-item  " >
                  <a class="nav-link" href="http://localhost/cms/mysql/login_read.php">Login Read</a>
              </li>
              <li class="nav-item  " >
                  <a class="nav-link" href="http://localhost/cms/mysql/login_update.php">Login Update</a>
              </li>
              <li class="nav-item" >
                  <a class="nav-link" href="http://localhost/cms/mysql/login_delete.php">Login Delete</a>
              </li>
              
          </ul>
      </div>
  </nav>

    <div class="container mt-4">
      <div class="col-md-6">
        <form action="login_create.php" method="post">
          <div class="form-group">
            <label for="">User Name</label>
            <input type="text"
              class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" placeholder="">
          </div>

          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          </div>
        </form>	
      </div>
    </div>
           
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>