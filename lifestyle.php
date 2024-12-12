<?php
include 'header.php';
include 'function.php';
?>
<div class="container-fluid col-md-10">
 <div class="ins-lifestyle-post mt-5">
   <div class="row">
    <?php
    $sql = "SELECT * FROM posts WHERE category_post = 'Lifestyle' ORDER BY id_post DESC LIMIT 1";
    $exe = mysqli_query($koneksi,$sql);

    ?>   
    <div class="col-md-8 ins-post">
     <?php
     foreach($exe as $newPostLeft):
     ?>
     <img src="assets/img/all-post/<?= $newPostLeft['img_post']?>" alt=""> 
      <div class="newPostInfo bg-white">
       <a href="pages.php?id_post=<?= $newPostLeft['id_post'];?>" id="title-post"><?= $newPostLeft['title_post'];?></a>
       <p id="date-post"><i class="far fa-clock"></i> <?= tgl_indonesia_2($newPostLeft['date_post']);?></p>
      </div>
     <?php
     endforeach; 
     ?>   
    </div>
    <div class="col-md-4 ins-post">
    <?php
     $sql2 = "SELECT * FROM posts WHERE category_post = 'Lifestyle' ORDER BY id_post LIMIT 2,5";
     $exe2 = mysqli_query($koneksi,$sql2);
    ?> 
    <div class="row">
      <?php
       foreach($exe2 as $newPostRight):   
      ?>   
      <div class="col-md-5" id="ins-post-left">
       <img src="assets/img/all-post/<?= $newPostRight['img_post'];?>" alt="">   
      </div>
      <div class="col-md-7" id="ins-post-right">
        <a href="pages.php?id_post=<?= $newPostRight['id_post'];?>" id="title-post"><?= $newPostRight['title_post'];?></a>  
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
<div class="container-fluid col-md-10" id="more-post">
 <?php
 $sql3 = "SELECT * FROM posts WHERE category_post = 'Lifestyle' ORDER BY id_post DESC LIMIT 2,3";
 $exe3 = mysqli_query($koneksi,$sql3);
 ?>    
 <div class="row" id="more-post">
  <div class="col-md-8">
  <h2 id="more-title">More</h2><hr>   
  <?php 
    foreach($exe3 as $morePost):
    ?> 
  <div class="row"> 
    <div class="col-md-4">
     <img src="assets/img/all-post/<?= $morePost['img_post'];?>" class="" alt="">
    </div>
    <div class="col-md-8">
     <a href="" id="title-post"><?= $morePost['title_post'];?></a>
     <p id="date-post"><i class="far fa-clock"></i> <?= tgl_indonesia_2($morePost['date_post']);?></p>
    </div>  
     
   </div>
   <hr>
   <?php
    endforeach;
    ?>
  </div>
 </div> 
</div>
<?php
include 'footer.php';
?>
<style>


.ins-lifestyle-post .col-md-8 img{
    width: 100%;
    height: 500px;
}
.ins-lifestyle-post .col-md-8 .newPostInfo{
    position: absolute;
    bottom: 0;
    right: 15px;
    width: 67%;
    padding: 25px 25px 25px 35px;
    background: #F4F5F6;
}
.ins-lifestyle-post .col-md-8 .newPostInfo #title-post{
    
    color: #000;
}
.ins-lifestyle-post .col-md-8 .newPostInfo a{
    font-size: 28px;
    text-decoration: none;
}
.ins-lifestyle-post .col-md-8 .newPostInfo #title-post:hover{
    color: #FF00FF;
    transition: .5s;
}
.ins-lifestyle-post .col-md-8 .newPostInfo #date-post{
    
    font-size: 14px;
}

.ins-lifestyle-post .col-md-4{
    padding-top: 30px;
} 
.ins-lifestyle-post .col-md-4 #ins-post-left{
    margin-bottom: 15px;
}
.ins-lifestyle-post .col-md-4 #ins-post-left img{
    width: 100%;
    height: 80px;
}

.ins-lifestyle-post .col-md-4 #ins-post-right #title-post{
    
    color: #000;
    text-decoration: none;
}
.ins-lifestyle-post .col-md-4 #ins-post-right #title-post:hover{
    color: #0065D5;
    transition: .5s;
}
#more-post{
    margin-top: 50px;
}
#more-post .col-md-8 #more-title{
    margin-top: 20px;
    font-size: 24px;
    
}
#more-post .col-md-8 #title-post{
    
    font-size: 28px;
    color: #000;
    text-decoration:none;
}
#more-post .col-md-8 img{
    width: 100%;
    height: 150px;
}
#more-post .col-md-8 #date-post{
    
    font-size: 14px;
}


</style>
