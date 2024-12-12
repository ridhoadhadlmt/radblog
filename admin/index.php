<?php 
include '../koneksi.php';


if(isset($_GET['q'])){
  $q = $_GET['q'];
}
else{
  $q = null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/jquery-nice.select.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
  

</head>
<body>
<div class="main-wrapper">
  <div class="sidebar-wrapper">
    <div class="sidebar-logo">
      <a href="index.php" class="navbar-brand">radBlogs</a> 
    </div>
    <div class="sidebar-profile">
      <div class="profile-img">
        <img src="../assets/img/profile/ridho.jpg" class="img-rounded-circle" width="50">
      </div>
      <div class="profile-info">
        <h6 class="username">Ridho Adha</h6>
        <h6 class="level">Admin</h6>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <i class="ion ion-md-pie"></i> Dashboard
        </li>
        <li class="nav-item" data-toggle="collapse" href="#post" role="button" aria-expanded="false" aria-controls="post">
          <a class="nav-link">Post <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <li class="nav-item collapse" id="post">
            <a href="index.php?q=add_post" class="nav-link">Tambah</a>
            <a href="index.php?q=post" class="nav-link">List</a>
          </li>
        </li>
        <li class="nav-item" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
          <a class="nav-link">Kategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <li class="nav-item collapse" id="category">
            <a href="index.php?q=add_category" class="nav-link">Tambah</a>
            <a href="index.php?q=category" class="nav-link">List</a>
          </li>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-content">
    <div class="main-header">
      <nav class="navbar navbar-expand-md">
        <button class="btn btn-toggle" id="menu-toggle"><i class="ion ion-md-menu"></i></button>
        <form method="GET" action="" class="navbar-search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search.." name="">
            <div class="input-group-append">
              <button class="btn"><i class="ion ion-ios-search"></i></button>
            </div>       
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="" class="nav-link"><i class="ion ion-md-mail"></i></a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link"><i class="ion ion-md-notifications"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" data-toggle="dropdown"><i class="ion ion-md-person"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
             <a href="" class="dropdown-item">Keluar</a> 
            </div>
          </li>
        </ul> 
      </nav>
    </div>
    <div class="main-body">
      <?php
        if($q == null){
          include 'dashboard.php';
        }
        else{
          if($q == 'post'){
            include 'tbl_post.php';
          }
          if($q == 'add_post'){
            include 'add_post.php';
          }
          if($q == 'edit_post'){
            include 'edit_post.php';
          }
        }

      ?>
    </div>
  </div>

</div>
</body>  
</html>
<script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-nice.select.min.js"></script>
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../assets/js/admin.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
  window.onload = function(){
    CKEDITOR.replace('content');
  }
});
</script>
