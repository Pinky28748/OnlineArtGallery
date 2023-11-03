<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $title = $_POST['arttitle'];
        $img = $_POST['imgurl']; 
        $price = $_POST['artprice'];
        $year_created = $_POST['year_created'];
        $artist_id = $_POST['artist_id'];
        

         $sql = "insert into art(title,img,price,year_created,artist_id) values('$title','$img',$price,$year_created,$artist_id)";
         $result = mysqli_query($con,$sql);
         if($result)
         {
             header('Location:displayart.php');
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
    <label for="Art Title" class="form-label">Art Title</label>
    <input type="text" class="form-control" name="arttitle" placeholder="Enter Art Title" autocomplete="off"></input>
</div>

    <div class="mb-3">
    <label for="Art Img url" class="form-label">Art Image Url</label>
    <input type="text" class="form-control" name="imgurl" placeholder="Enter Art Image Url" autocomplete="off"></input>

  </div>

  <div class="mb-3">
    <label for="Art Price" class="form-label">Art Price</label>
    <input type="number" class="form-control" name="artprice" placeholder="Enter Art Price" autocomplete="off"></input>
    </div>

    <div class="mb-3">
    <label for="Year Created" class="form-label">Year Created</label>
    <input type="number" class="form-control" name="year_created" placeholder="Enter Year created" autocomplete="off"></input>
    </div>
    <div class="mb-3">
    <label for="Artist Id" class="form-label">Artist Id</label>
    <select name="artist_id">
    <option>1</option>
    <option>2</option>
    <optio>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    </div>
    

    
  

  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    </div>

   

  </body>
</html>