<?php 
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
header("location:adminform.php");
}
?>
<html>
    <title>Online Shopping Website</title>
<head>
<style>
body{
margin:0px;
 background-image:url("contactform.jpg");
            background-size:100% 150%;
}
div.header{
font-family:poppins;
display:flex;
justify-content:space-between;
align-items:center;
padding:0px 60px;
background-color:aliceblue;
}
div.header button{
background-color:aliceblue;
font-size: 16px;
font-weight: 550;
padding:8px 12px;
border:2px solid black;
border-radius: 5px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
</style>
<body>
<div class="header">
<h1>WELCOME TO ADMIN PANEL : <?php  echo $_SESSION['AdminLoginId']?></h1>
<form method="POST">
<button name="Logout">LOGOUT</button>
</form>
</div>
<div class="topnav">
  <a href="displayartist.php"><font size="5">Artists</font></a>
  <a href="displayart.php"><font size="5">Arts</a>
</div>
<?php
if(isset($_POST['Logout']))
{
session_destroy();
header("Location:adminlogin.php");
}
?>

</body>
</html>