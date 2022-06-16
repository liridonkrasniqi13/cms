<?php include "db.php"; ?>
<?php include "functions.php";?>


<?php DeleteRows(); ?>

<?php include "includes/header.php" ?>

    <div class="container mt-4">
      <div class="col-md-6">

          <h1 class="text-center">Delete</h1>

      <form action="login_delete.php" method="post">
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
            <select name="id" id="id">
            <?php 

              showAllData();

            ?>

            </select>

            
          </div>

          <div class="form-group">
            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
          </div>

          
        </form>	


        
      </div>
    </div>
           
<?php include "includes/footer.php" ?>