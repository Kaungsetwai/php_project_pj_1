<?php 
session_start();
include("function.php");
$auth = check();





include("layouts/head.php");?>

<body>
 <?php include("layouts/navbar.php");?>

 <div class="container">
  <div class="row">
   <div class="col-lg-8 mt-3">
    <div class="card" style="width: 18rem;">
     <img src="..." class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
       content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
     </div>
    </div>
   </div>
   <div class="col-lg-4 mt-3">
    <div class="card" style="width: 18rem;">
     <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
     </ul>
    </div>
   </div>
  </div>
 </div>
 <?php include("layouts/footer.php");?>



</body>

</html>