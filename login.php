<html lang="en">
<head>
    <meta charset="utf-8">
    <title>arbuz</title>
    <style>
  body {
    background-color: pink;
  }
    <link href="css/style.css" media="screen" rel="stylesheet">
    <link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
         <div>
    <form action="authorize.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" />
      <label for="password">Password:</label>
      <input type="password" name="password" />
      <input type="submit" value="Login" />
        // In the registration page 

// Add a field for each user to input their username and password 

<form>
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" />
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" />
  <input type="submit" value="Register" />
</form>

// In the backend 

<?php

if(isset($_POST['username']) && isset($_POST['password'])) {
  //check if username and password are valid
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Connect to the database
  $conn = mysqli_connect('localhost', 'db_user', 'db_password', 'db_name');

  //Query the database
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  //Check if a match was found
  if(mysqli_num_rows($result) == 1) {
    //Authorize the user
    session_start();
    $_SESSION['username'] = $username;
    //Redirect the user to the home page
    header('Location: home.php');
  } else {
    //Invalid credentials
    echo 'Invalid credentials';
  }
}
?>
    </form>
  </div>
    </div>
</div>
    
<footer>


</footer>
</body>
</html>
