<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Online  Art Gallery</title>
  </head>
  <body class="text-center">
    <main class="bg-white">
      <form id="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
        <h3 class="mb-3">Sign In</h3>
        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control mb-3">
        <input type="password" id="pwd" name="password" placeholder="Password" class="form-control mb-3">
      
          <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit"></input>
        
      </form>
    </main>
    
  </body>
</html>
       
<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'onlineartgallery';

$emailErr = "";
$gamil = "";

// Establishing a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the entered username and 
      if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }



    

    $password = $_POST['password'];

    // SQL query to check if the username and password exist in the database
    $query = "SELECT gmail,password FROM admin WHERE gmail = '$email' AND password = '$password' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Successful login
        session_start();
    $_SESSION['AdminLoginId']=$_POST['email'];
     header("location:adminpanel.php");
    } else {
        // Invalid login credentials
        echo "Invalid username or password!";
    }
}
?>






