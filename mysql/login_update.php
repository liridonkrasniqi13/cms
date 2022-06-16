<?php include "db.php"; ?>
<?php include "functions.php";?>

<?php UpdateTable(); ?>


<?php include "includes/header.php" ?>

    <div class="container mt-4">
      <div class="col-md-6">
        <h1 class="text-center">Update</h1>
      <form action="login_update.php" method="post">
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
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
          </div>

          
        </form>	


        
      </div>
    </div>
           
<?php include "includes/footer.php" ?>