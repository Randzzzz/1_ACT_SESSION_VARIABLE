<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php session_start(); ?>

  <form action="handleForm.php" method="POST">
    <p>Username <input type="text" placeholder="Username" name="username"></p>
    <p>Password <input type="password" placeholder="Password" name="password"></p>
    <p><input type="submit" value="Submit" name="loginBtn"></p>
  </form>
  <a href="unset.php"><button>Logout</button></a>

  <?php
  if (isset($_SESSION['logged_msg'])) {
    echo $_SESSION['logged_msg'];
  } else {
    if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      echo "<h2>User logged in:$username</h2>";
    }
    if (isset($_SESSION['password'])) {
      $password = $_SESSION['password'];
      echo "<h2>User password:$password</h2>";
    }
  }


  ?>

</body>

</html>