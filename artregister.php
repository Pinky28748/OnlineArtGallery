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
      <form id="register-form"  method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
        <h3 class="mb-3">Register</h3>
        <input type="text" name="fname" placeholder="First Name" class="form-control mb-3" ></input>
        <input type="text" name="lname" placeholder="Last Name" class="form-control mb-3" ></input>
        <input type="number" name="phno" placeholder="Contact Number"    required class="form-control mb-3"></input>
        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control mb-3">
        <input type="password" id="pwd" name="password" placeholder="Password" class="form-control mb-3">

      
          <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit"></input>
        
      </form>
    </main>
    
  </body>
</html>
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineartgallery";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) 
{

// Get the user input from the registration form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phno  = $_POST['phno'];
$email = $_POST['email'];
$password = $_POST['password'];

$emailExistsQuery = "SELECT * FROM artist WHERE email = '$email'";
$result = $conn->query($emailExistsQuery);

if ($result->num_rows > 0) {
    // Email already exists in the database
    echo "Account already exists.Login";
} 
else
{

// SQL query to insert the user into the database
$sql = "INSERT INTO artist(fname,lname,phoneno,email,password) VALUES ('$fname','$lname', '$phno','$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}
}
?>
