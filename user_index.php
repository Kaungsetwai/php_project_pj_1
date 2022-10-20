<?php 
include("layouts/head.php")?>

<body>
 <?php include("layouts/navbar.php"); ?>
 <!doctype html>

 <html lang="en">

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>

 <body>
  <div class="container">
   <div class="row">
    <div class="col-lg-8">
     <div class="card">
      <div class="card-header">
       <h1>User Lists <span><a href="create.php" class="btn btn-primary">User Create</a></span> </h1>
       <div class="float-end">
        <form class="d-flex" role="search" action="search.php" method="POST">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
         <input class="btn btn-outline-success" type="submit" value="Search">
        </form>
       </div>
      </div>
      <div class="card-body">
       <table class="table">
        <thead>
         <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         <?php 
        include("config/db_con.php");
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a> <a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
            <a href='show.php?id=".$row['id']."' class='btn btn-warning'>Show</a>
            </td>";
          }
        }else{
          echo "0 result";
        }
        ?>


        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>
  <?php include("layouts/footer.php"); ?>

 </html>