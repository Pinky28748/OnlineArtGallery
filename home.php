<html>
<head>
<title>Home Page</title>
</head>
<body>
<h1>Welcome to Home page</h1>

</body>
</html>
<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['gmail'])) {
    header("Location: logincus.php");
    exit;
}

// Retrieve the username from the session variable
$gmail = $_SESSION['gmail'];

// Display user data or perform any other operations
echo "Welcome, " . $gmail . "!";

// You can also fetch additional user data from the database using the username
// ...



?>
