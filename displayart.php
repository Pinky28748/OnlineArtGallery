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
        <button class="btn btn-primary my-5"><a href="artadd.php" class="text-light">Add Art</a></button>
        <button class="btn btn-primary my-5"><a href="adminpanel.php" class="text-light">Back</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Art Id</th>
      <th scope="col">Art Title</th>
      <th scope="col">Img</th>
      <th scope="col">Price</th>
      <th scope="col">Year Created</th>
      <th scope="col">Artist Id</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "Select * from art";
      $result = mysqli_query($con,$sql);
      if($result)
      {
         while($row=mysqli_fetch_assoc($result))
         {
            $artid = $row['artid'];
            $title = $row['title'];
            $img = $row['img'];
            $price = $row['price'];
            $year_created = $row['year_created'];
            $artist_id = $row['artist_id'];
        
           echo '<tr>
                <th scope="row">'.$artid.'</th>
                <td>'.$title.'</td>
                <td>'.$img.'</td>
                <td>'.$price.'</td>
                <td>'.$year_created.'</td>
                <td>'.$artist_id.'</td>
                 <td>
                  <button class="btn btn-primary"><a href="updateart.php?updateaid='.$artid.'" class="text-light">Update</button>
                  <button class="btn btn-danger"><a href="deleteart.php?deleteid='.$artid.'" class="text-light">Delete</button>
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