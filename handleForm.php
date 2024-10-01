<?php
session_start();

// Check if submitBtn exists
if (isset($_POST['loginBtn'])) {

  // Get the first name from index.php
  $username = $_POST['username'];

  // Get the password from the input field
  $password = md5($_POST['password']);

  if (isset($_SESSION['username'])) {

    $_SESSION['logged_msg'] = "<br>" . $_SESSION['username'] . ' is already logged in. Wait for them to logout first.';


    header('Location: index.php');
    exit();
  }

  // Set session variables for the logged-in user
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $_SESSION['logged_msg'] = $logged_msg;

  // Go back to index.php
  header('Location: index.php');
}
?>