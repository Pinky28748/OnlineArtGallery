<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Online Art Gallery!</title>
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="artistadd.php" class="text-light">Add Artist</a></button>
        <button class="btn btn-primary my-5"><a href="adminpanel.php" class="text-light">Back</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Artist Id</th>
      <th scope="col">Artist Name</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "Select * from artist";
      $result = mysqli_query($con,$sql);
      if($result)
      {
         while($row=mysqli_fetch_assoc($result))
         {
           $artist_id = $row['artist_id'];
           $name = $row['name'];
           echo '<tr>
                <th scope="row">'.$artist_id.'</th>
                <td>'.$name.'</td>
                 <td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$artist_id.'" class="text-light">Update</button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$artist_id.'" class="text-light">Delete</button>
                </td> 

                </tr>';
         }
      }







    ?>
 
  </tbody>
</table>
    </div>
  </body>
</html>