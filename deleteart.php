<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql = "Delete from art where artid = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        //echo"Delete succesfull";
            header('location:displayart.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}