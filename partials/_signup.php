<?php
include '../partials/_dbconnect.php';
session_start();
  $name = $_POST["name"];
  $username = $_POST["usern"];
  $email = $_POST["email"];
  $password = $_POST["passw"];

  $emailcheck = "select * from users where email='$email'";
  $query = mysqli_query($conn, $emailcheck);

  $emailcount = mysqli_num_rows($query);

  if ($emailcount > 0) {
    echo '<script>alert("Email Id Alredy Exists")</script>';
  } else {
      $existssql = "SELECT * FROM `users` WHERE username = '$username'";
      $result = mysqli_query($conn, $existssql);
      $numExitsRows = mysqli_num_rows($result);

      if ($numExitsRows > 0) {
        echo '<script>alert("Username Alredy Exists")</script>';
      } else {
        $sql = "INSERT INTO `users`(`Name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Account Has Been Created")</script>';
            header("Location: ../index.php");
        } else {
            echo '<script>alert("Not Able to Create Account")</script>';
        }
      }
    }
?>