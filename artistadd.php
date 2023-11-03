<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $id=$_POST['artid'];
         $name=$_POST['artname'];

         $sql = "insert into artist(artist_id,name) values($id,'$name')";
         $result = mysqli_query($con,$sql);
         if($result)
         {
             header('location:displayartist.php');
         }
         else
         {
             die(mysqli_error($con));
         }

    }





?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Online Art Gallery</title>
  </head>
  <body>
      <h1 align="center">Add Artist</h1>
    <div class="container my-5">
    <form method="POST" action="">
  <div class="mb-3">
    <label for="Artist id" class="form-label">Artist Id</label>
    <input type="number" class="form-control" name="artid" placeholder="Enter Artist Id" autocomplete="off"></input>

  </div>
  <div class="mb-3">
    <label for="Artist name" class="form-label">Artist Name</label>
    <input type="text" class="form-control" name="artname" placeholder="Enter Artist Name" autocomplete="off"></input>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    </div>

   

  </body>
</html>