<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Online Art gallery</title>
  </head>
  <body class="text-center">
    <main class="bg-white">
      <form id="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
        <h3 class="mb-3">Sign In</h3>
        <input type="email" id="email" name="gmail" placeholder="Email Address" class="form-control mb-3" autocomplete="off" required>
        <input type="password" id="pwd" name="password" placeholder="Password" class="form-control mb-3" autocomplete="off" required>
      
          <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit"></input>
        
      </form>
    </main>
    
  </body>
</html>
<?php
session_start();

// Check if the user is already logged in, redirect to home page
if(isset($_SESSION['gmail'])) {
    header("Location: home.php");
    exit;
}

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineartgallery";

// Check if the login form is submitted
if(isset($_POST['submit'])) {
    // Get the entered username and password
    $gmail = $_POST['gmail'];
    $pass = $_POST['password'];


    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to fetch user information
    $sql = "SELECT gmail,password FROM customer WHERE gmail = '$gmail' AND password = '$pass' ";
    $result = $conn->query($sql);

    // Check if a user with the provided credentials exists
    if ($result->num_rows == 1) {
        // Store the username in a session variable
        $_SESSION['gmail'] = $gmail;
        
        // Redirect to the home page
        header("Location: index1.php");
        exit;
    } else {
        // Invalid login credentials, show an error message
        echo "Invalid email or password.";
    }

    // Close the database connection
    $conn->close();
}
?>




