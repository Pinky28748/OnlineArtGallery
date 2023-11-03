<?php
// Replace 'your_database_username', 'your_database_password', and 'your_database_name' with actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineartgallery";

// Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to insert data into the 'feedback' table
$sql= "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo"Thanks for yur feedback";
    echo "<a href='home.html'>Back to Home Page</a>";
    
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
?>