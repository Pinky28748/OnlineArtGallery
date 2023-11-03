<?php
$con = new mysqli('localhost','root','','onlineartgallery');
if(!$con)
{
    die(mysqli_error($con));
}

?>