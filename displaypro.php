<?php
// Database connection configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'onlineartgallery';

// Create a database connection
$connection = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);

}
$query = "SELECT artid,title,img,price,year_created FROM art";
$result = $connection->query($query);

// Check if any rows were returned
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $artid = $row['artid'];
        $title = $row['title'];
        $img = $row['img'];
        $price = $row['price'];
        $year_created = $row['year_created'];

        
        // Display the art piece using Bootstrap HTML structure
        
        echo "<table><tr><td><i
	



    }
} else {
    echo 'No art pieces found.';
}

// Close the database connection
$connection->close();
?>