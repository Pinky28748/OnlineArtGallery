<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql = "Delete from artist where artist_id = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        //echo"Delete succesfull";
            header('location:displayartist.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}