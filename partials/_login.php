<?php
include '../partials/_dbconnect.php';
session_start();
  $username = $_POST['usern'];
  $password = $_POST["passw"];

  $username_search = "SELECT * FROM `users` WHERE `username`='$username'";
  $query = mysqli_query($conn, $username_search);

  $username_count = mysqli_num_rows($query);

  if ($username_count == 1) {
    while ($username_pass = mysqli_fetch_assoc($query)) {
      if ($password == $username_pass['password']){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $username_pass['id'];
        header("location: ../dashboard.php");
      } else {
        echo '<script>alert("Invalid Passowrd")</script>';
        header("location: ../index.php.php");
      }
    }
  } else {
    echo '<script>alert("Username Not Exists")</script>';
    header("location: ../index.php");
  }
?>