<?php
include "db.php";

function CreateUser() {

if(isset($_POST['submit'])) {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];

      $query = "INSERT INTO users(username,password) ";
      $query .= "VALUES ('$username','$password')";

      $result =    mysqli_query($connection, $query);

      if (!$result) {
        die('Query Faild'); 
      } else {
        echo "User Created ";
      }

}

}


function showAllData() {
  global $connection;
  $query = "SELECT * FROM users";
    $result =    mysqli_query($connection, $query);
    if (!$result) {
      die('Query Faild'); 
    }


    while($row = mysqli_fetch_assoc($result )) {
      $id = $row['id'];

      echo "<option value='$id' id='id'>$id</option>";
    }
}


function UpdateTable() {
  if(isset($_POST['submit'])) {
  global $connection;
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id";

  
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die("Query Faild" .mysqli_error($connection));
  } else {
        echo "User Update ";
      }
  
  }
}


function DeleteRows() {
  if(isset($_POST['submit'])) {
  global $connection;
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "DELETE FROM users ";
  $query .= "WHERE id = $id";

  
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die("Query Faild" .mysqli_error($connection));
  } else {
        echo "User Deleted ";
      }
  }
}




?>