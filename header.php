<?php
  include 'koneksi.php';
  include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body onload="myFunction()">
  <!-- <div class="preloader">
   <div class="loader">
   </div>
  </div> -->
<nav class="navbar navbar-expand-md navbar-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-category" aria-controls="navbar-top" aria-expanded="false" aria-label="Toggle navigation">
    <i class="ion ion-md-menu"></i>
    </button>
    <a href="index.php" class="navbar-brand">radBLOGs</a>  
  </div> 
</nav>

<nav class="navbar navbar-expand-md navbar-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbar-category">
     <ul class="navbar-nav navbar-category" >
      <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <?php
        $sql = "SELECT DISTINCT category_post FROM posts";
        $exe = mysqli_query($koneksi,$sql);
        foreach($exe as $kategori):
      ?>

      <li class="nav-item"><a href="" class="nav-link"><?= $kategori['category_post'];?></a></li>
      <?php
        endforeach;
      ?>
      
     </ul> 
     <ul class="navbar-nav ml-auto navbar-social">
       <li class="nav-item" id="fb"><a href="https://www.facebook.com/ridhomckinnon"  class="nav-link"><i class="ion ion-logo-facebook"></i></a></li>
       <li class="nav-item" id="ig"><a href="https://www.instagram.com/ridhomckinnon/"  class="nav-link"><i class="ion ion-logo-instagram"></i></a></li>
       <li class="nav-item" id="wa"><a href=""  class="nav-link"><i class="ion ion-logo-whatsapp"></i></a></li>
       <li class="nav-item" id="tw"><a href="https://twitter.com/ridhoadha24"  class="nav-link"><i class="ion ion-logo-twitter"></i></a></li>
       <li class="nav-item" id="yt"><a href=""  class="nav-link"><i class="ion ion-logo-youtube"></i></a></li>
       
     </ul>
  </div>
 </div>  
</nav>

