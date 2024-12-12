<?php
include 'header.php';
include 'function.php';
?>

<div class="container-fluid col-md-10">
<div class="ins-pages-info mt-3">
<?php
    $id = $_GET['id_post'];
    $table = 'all_post';
    $field = '*';
    $kondisi = "WHERE id_post = '$id'";
    $exe = readData($table,$field,$kondisi);
    $ftch = mysqli_fetch_array($exe);
?>
 <div class="row">
 <div class="col-md-2" id="recents-post">
  <h2 class="mb-3">Recents Post</h2><hr>
  <?php
  $sql = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post DESC LIMIT 0,5");
  ?>
  <?php
  foreach ($sql as $recents):
  ?>
  <img class="mb-1" src="assets/img/all-post/<?= $recents['img_post'];?>" alt="">
  <a id="title-recents-post" href="pages.php?id_post=<?= $recents['id_post'];?>"><?= $recents['title_post'];?></a>
  <hr class="mt-2">
  <?php
  endforeach;
  ?>  
 </div>
 <div class="col-md-10">
 <div class="title-post text-center">  
 <h1 id="title-post"><?= $ftch['title_post'];?></h1>
  <p class="mb-0 mt-0" id="category-post">
   <?php 
    if($ftch['category_post']=='Tech'){ ?>
    <span style="color: #0064D2;"><?php echo $ftch['category_post']; ?></span>
    <?php   
    }
    else if($ftch['category_post']=='Lifestyle'){ ?>
    <span style="color: purple;"><?php echo $ftch['category_post']; ?></span>
    <?php
    }
    else if($ftch['category_post']=='Sports'){ ?>
    <span style="color: green;"><?php echo $ftch['category_post']; ?></span>
    <?php
    }
    else if($ftch['category_post']=='Travel'){ ?>
    <span style="color: #FF0000;"><?php echo $ftch['category_post']; ?></span>
    <?php
    }
    ?>
  </p>
 <p class="mt-1 mb-1" id="date-post"><i class="far fa-clock"></i> <?= tgl_indonesia($ftch['date_post']);?></p> 
 <div class="btn-group mt-1">
 <a href="" class="btn btn-default text-white" id="fb"><i class="ion ion-social-facebook"></i></a>
 <a href="" class="btn btn-default text-white" id="ig"><i class="ion ion-social-instagram"></i></a>
 <a href="" class="btn btn-default text-white" id="wa"><i class="ion ion-social-whatsapp"></i></a>
 <a href="" class="btn btn-default text-white" id="tw"><i class="ion ion-social-twitter"></i></a>
 </div> 
 </div>    
 <img class="mt-3 mb-0" id="img-post" src="assets/img/all-post/<?= $ftch['img_post'];?>" alt="">
 <div class="row">
  <div class="col-md-8">
  <p id="content-post"><?= $ftch['content_post'];?></p> 
  <div class="tags">
  </div> 
  <hr>
  <div class="terkait">
   <h4>Terkait</h4>
    <?php
     $sql = "SELECT * FROM all_post ORDER BY id_post DESC LIMIT 6,4";
     $exe = mysqli_query($koneksi,$sql);
    ?>
   <div class="row">
    <?php
    foreach($exe as $terkait):
    ?>
   <div class="col-md-3">
    <img src="assets/img/all-post/<?= $terkait['img_post']; ?>" alt="" class="img-fluid">
    <a href="pages.php?id_post=<?= $terkait['id_post'];?>" id="title-post-terkait"><?= $terkait['title_post'];?></a>
   </div>
    <?php
    endforeach;
    ?>    
   </div>
     
  </div> 
  </div>
  <div class="col-md-4 mt-3" id="lastest-post">
  <h2 class="mt-2 mb-3">Lastest Post</h2><hr>
  <?php
  $sql = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post ASC LIMIT 0,5");
  ?>
  <?php
  foreach ($sql as $lastest):
  ?>
  <div class="row">
   <div class="col-md-5">
   <a href=""><img src="assets/img/all-post/<?= $lastest['img_post'];?>" alt=""></a>
   </div>
   <div class="col-md-7">
   <a id="title-lastest-post" href="pages.php?id_post=<?= $lastest['id_post'];?>"><?= $lastest['title_post'];?></a>
    
   </div>
  
  </div>
  <hr>
  
  <?php
  endforeach;
  ?>
  </div> 
</div>
  
 </div>
 </div>
</div>
</div>

<?php
include 'footer.php';
?>

<style>

@media screen and(max-width: 550px){
    .navbar{
        display: none;
    }
}
img{
  border-radius: 5px;
}
.ins-pages-info{

}
.ins-pages-info .col-md-10{
  border-left: 1px solid #ddd;
}
.ins-pages-info .col-md-10 .col-md-8{
 
}
.ins-pages-info .col-md-10 p{
  line-height: 25px;
} 
.ins-pages-info .col-md-10 #title-post{

} 
.ins-pages-info .col-md-10 #category-post{
  font-size: 16px;
      
}
.ins-pages-info .col-md-10 #date-post{ 
  font-size: 14px;
    
}
.ins-pages-info .col-md-10 .btn-group{

}
.ins-pages-info .col-md-10 .btn-group .btn{
  border-radius: 5px;
  padding: 5px 15px;
  width: 50px;
  margin-left: 5px;
}
.ins-pages-info .col-md-10 .btn-group #fb{
  background: #475993;
}
.ins-pages-info .col-md-10 .btn-group #ig{
  background: #BA3186;
}
.ins-pages-info .col-md-10 .btn-group #wa{
  background: #7AD06D;
}
.ins-pages-info .col-md-10 .btn-group #tw{
  background: #03A9F4;
}
.ins-pages-info .col-md-10 #img-post{
  width: 100%;
  height: 550px;
}
.ins-pages-info .col-md-10 .terkait{
}
.ins-pages-info .col-md-10 .terkait h4{
  font-style: italic;
  font-size: 16px;
  padding: 0 10px;
  border-left: 4px solid #162A4C;
}
.ins-pages-info .col-md-10 .terkait .col-md-3{
  
}
.ins-pages-info .col-md-10 .terkait .col-md-3 img{
  width: 100%;
  height: 80px;
}
.ins-pages-info .col-md-10 .terkait .col-md-3 a{
  text-decoration: none;
  color: #000;
  font-size: 16px;
  font-weight: 100;
}
.ins-pages-info .col-md-10 .terkait .col-md-3 a:hover{
  color: #3453AD;
  transition: .5s;
}
.ins-pages-info #recents-post{

}
.ins-pages-info #recents-post h2{
  font-size: 18px;
  padding: 0 10px;
  font-style: italic;
  border-left: 4px solid #162A4C;
}
.ins-pages-info #recents-post img{
    width: 100%;
    height: 120px;
}
.ins-pages-info #recents-post #title-recents-post{
    font-size: 16px;
    color: #000;
    text-decoration: none;
    
}
.ins-pages-info #recents-post #title-recents-post:hover{
    color: #22CCBB;
    transition: .5s;
}

.ins-pages-info #lastest-post{
    border-left: 1px solid #e8e9ed;
}
.ins-pages-info #lastest-post h2{
  font-size: 18px;
  width: 100%;
  padding: 0 10px;
  font-style: italic;
  border-left: 4px solid #162A4C;
}

.ins-pages-info #lastest-post img{
  width: 100%;
  margin-bottom: 10px;
  height: 80px;
}
.ins-pages-info #lastest-post #category-lastest-post{
  margin: 0;
}
.ins-pages-info #lastest-post #category-lastest-post #tech{
  color: #162A4C;
}    
.ins-pages-info #lastest-post #category-lastest-post #lifestyle{
  color: #BB22EE;
}
.ins-pages-info #lastest-post #category-lastest-post #travel{
  color: #FF0000;
}
.ins-pages-info #lastest-post #category-lastest-post{
  color: green;
}

.ins-pages-info #lastest-post #title-lastest-post{
  font-size: 14px;
  color: #000;
  margin-bottom: 10px;
  text-decoration: none;
  margin-top: 0px;
}
.ins-pages-info #lastest-post #title-lastest-post:hover{
  color: #22CCBB;
  transition: .5s;
}
.ins-pages-info #lastest-post hr{
  margin-top: 10px;
  width: 100%;
  margin-bottom: 20px;
}


</style>
