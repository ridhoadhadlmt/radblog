<?php
include 'header.php';
include 'function.php';
?>
<div class="container-fluid col-md-10" id="recents-post">
 
 <div class="content-recents-post">
 <?php
 	$sql = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post DESC LIMIT 1");
 	$sql2 = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post DESC LIMIT 1,2");
 	$sql3 = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post DESC LIMIT 3,8");
 	$sql4 = mysqli_query($koneksi,"SELECT * FROM all_post ORDER BY id_post DESC LIMIT 9,10");
 ?>	
  <h4 id="title">Recents</h4>
  <hr>
  <div class="row">
  	
   <div class="col-md-8" id="recents-post-left">
	   
   	<?php
  	foreach($sql as $content):
  	?>
   	<img src="assets/img/all-post/<?= $content['img_post'];?>">
   	<div class="text">
	  <p id="category-post">
		<?php 
		if($content['category_post']=='Tech'){ ?>
		<span id="tech"><?php echo $content['category_post'];?></span>
		<?php 
		}
		if($content['category_post']=='Travel'){ ?>
		<span id="travel"><?php echo $content['category_post'];?></span>
		<?php 
		}
		if($content['category_post']=='Lifestyle'){ ?>
		<span id="lifestyle"><?php echo $content['category_post'];?></span>
		<?php 
		}
		if($content['category_post']=='Sports'){ ?>
		<span id="sports"><?php echo $content['category_post'];?></span>
		<?php 
		}
		?>
	  </p>	   
	 <!-- <span id="category-post"><?= $content['category_post'];?></span> -->
   	 <a href="pages.php?id_post=<?= $content['id_post'];?>" id="title-post"><?= $content['title_post'];?></a>	
   	 <p id="date-post"><i class="far fa-clock"></i><?= tgl_indonesia_2($content['date_post']);?></p>
   	</div>
   </div>
   
   <?php
   endforeach;
   ?>
   
   <div class="col-md-4" id="recents-post-right">
   <?php 
   foreach ($sql2 as $content2):
   ?>
   <img src="assets/img/all-post/<?= $content2['img_post'];?>">
   	
   	<div id="detail-post">
   	 <div class="text"> 
	 <p id="category-post">
	 	<?php 
		if($content2['category_post']=='Tech'){ ?>
		<span id="tech"><?php echo $content2['category_post'];?></span>
		<?php 
		}
		if($content2['category_post']=='Travel'){ ?>
		<span id="travel"><?php echo $content2['category_post'];?></span>
		<?php 
		}
		if($content2['category_post']=='Lifestyle'){ ?>
		<span id="lifestyle"><?php echo $content2['category_post'];?></span>
		<?php 
		}
		if($content2['category_post']=='Sports'){ ?>
		<span id="sports"><?php echo $content2['category_post'];?></span>
		<?php 
		}
		?>	 
	 </p>		
	  <!-- <span id="category-post"><?= $content2['category_post'];?></span> -->
   	  <h2 id="title-post"><a href="pages.php?id_post=<?= $content2['id_post'];?>"><?= $content2['title_post'];?></a></h2>
   	  <!-- <p id="date-post"><?= tgl_indonesia($content2['date_post']);?></p>	 -->
   	 </div>	
   	</div>
   	
   <?php
	endforeach;
   ?>	
   </div>
   	
  </div>	
 </div>
 <div class="more-recents" id="">
  <div class="row">    
   <div class="col-md-8">
    <h4>More</h4><hr>
    <?php 
    foreach($sql4 as $morePost):
    ?>
    <div class="row">
    <div class="col-md-2" id="more-post-left">
     <span id="date-post"><i class="far fa-clock"></i> <?= tgl_indonesia_2($morePost['date_post']);?></span>
    </div>
    <div class="col-md-3" id="more-post-center">
     <img src="assets/img/all-post/<?= $morePost['img_post'];?>" alt="">   
    </div>
    <div class="col-md-7" id="more-post-right">
     <!-- <p id="category-post"><?= $morePost['category_post'];?></p>    -->
	 <p id="category-post">
	 	<?php 
		if($morePost['category_post']=='Tech'){ ?>
		<span id="tech"><?php echo $morePost['category_post'];?></span>
		<?php 
		}
		if($morePost['category_post']=='Travel'){ ?>
		<span id="travel"><?php echo $morePost['category_post'];?></span>
		<?php 
		}
		if($morePost['category_post']=='Lifestyle'){ ?>
		<span id="lifestyle"><?php echo $morePost['category_post'];?></span>
		<?php 
		}
		if($morePost['category_post']=='Sports'){ ?>
		<span id="sports"><?php echo $morePost['category_post'];?></span>
		<?php 
		}
		?>
	 </p>
	 <a href="pages.php?id_post=<?= $morePost['id_post'];?>" id="title-post"><?= $morePost['title_post'];?></a>

     <!-- <h6 id="content-post">
     <?php 
     if(str_word_count($morePost['content_post']) > 0){
         echo substr($morePost['content_post'],0,200);
     }
     else{
         echo $morePost['content_post'];
     }
     ?>
      </h6>  -->
    </div>
    
    
    </div>
    <hr>
    <?php
    endforeach;
    ?>
   </div> 
   <div class="col-md-4">

   </div>
  </div>
 </div>   
</div>

<?php
include 'footer.php';
?>
<style type="text/css">
	
@media screen and (max-width: 500px){
	.navbar{
		background : #2B2D32;
	}
	.navbar-brand{
		color: #fff;
	}
	#navbar-2{
		display: none;
		padding: 0;
		margin: 0;
	}
	#title{
		display :none;
	}
	hr{
		display: none;
	}
	.container-fluid .col-md-10{
		margin-top: 0;
	}
	#recents-post-left img{
		max-height: 300px;
	}
	#recents-post-left .text{
		position: absolute;
		bottom: 0;
		left:0;
	}
	#recents-post-right img{
		height: 300px;
	}
	
}
#recents-post{
	margin-top: 50px;
	margin-bottom: 20px;
	background: #FFF; 
}
#recents-post h4{
	margin-bottom: 0;
}

#recents-post-left{
	margin-top: 20px;
}
#recents-post-left img{
	width: 100%;
	/*border-radius: 5px;*/
	height: 500px;
}
#recents-post-left .text{
	position: absolute;
	bottom: 24px;
	right: 15px;
	width: 58%;		
	background: #FFF;
	padding: 25px 25px 25px 35px;
	color: #FFF;
}
#recents-post-left .text #category-post{
	margin-bottom: 0;
}
#recents-post-left .text #category-post #tech{
	color: #0064D2;
}
#recents-post-left .text #category-post #lifestyle{
	color: #BB22EE;
}
#recents-post-left .text #category-post #travel{
	color: #FF0000;
}
#recents-post-left .text #category-post #sports{
	color: green;
}
#recents-post-left .text #title-post{
	color: #000;
	font-size: 28px;
	text-decoration: none;
}

#recents-post-left .text #title-post:hover{
	color: #FF0000;
	transition: .5s;
}
#recents-post-left .text #date-post{
	color: #555;
	margin-bottom: 0;
	margin-top: 0;
	font-size: 14px;
}
#recents-post-right{
	margin-top: 20px;
}
#recents-post-right img{
	width: 100%;
	margin-bottom: 25px;
	height: 237px;
}
#recents-post-right #detail-post{
	position: relative;	
}
#recents-post-right #detail-post .text{
	position: absolute;
	bottom: 25px;
	width: 80%;
	background: #FFF;		
	padding: 10px 15px;
}
#recents-post-right #detail-post .text #category-post{
	margin-bottom: 0;
}
#recents-post-right #detail-post .text #category-post #tech{
	color: #0064D2;
}
#recents-post-right #detail-post .text #category-post #lifestyle{
	color: #BB22EE;
}
#recents-post-right #detail-post .text #category-post #travel{
	color: #FF0000;
}
#recents-post-right #detail-post .text #category-post #sports{
	color: green;
}
#recents-post-right .text #title-post{
	color: #000;
	width: 95%;
	font-size: 20px;
	margin-bottom: 0;
}
#recents-post-right .text #title-post a{
	text-decoration: none;
	color: #000;
}
#recents-post-right .text #title-post:hover{
	color: #FF0000;
	transition: .5s;
}
#recents-post-right .text #date-post{
	color: #0065D5;
	font-size: 14px;
}
.more-recents{
	padding-top: 50px;
	padding-bottom: 25px;
	background: #FFF;
	
}
.more-recents .row{
	margin-top: 30px;
	margin-bottom: 30px;
}
.more-recents #more-post-center img{
    width: 100%;
    height: 120px;
}
.more-recents #more-post-left #date-post{
	font-size: 14px;
}
.more-recents #more-post-right #category-post{
  
    margin-bottom: 0;
}
.more-recents #more-post-right #category-post #tech{
	color: #0064D2;
}
.more-recents #more-post-right #category-post #lifestyle{
	color: #BB22EE;
}
.more-recents #more-post-right #category-post #travel{
	color: #FF0000;
}
.more-recents #more-post-right #category-post #sports{
	color: green;
}
.more-recents #more-post-right #title-post{
    font-size: 24px;
    line-height: 28px;
    color: #000;
    text-decoration: none;
}
.more-recents #more-post-right #title-post:hover{
    color: #BB22CC;
    transition: .5s;
}
.more-recents #more-post-right #content-post{
    font-weight: 250;
    font-family:'Cormorant Garamond',sans-serif; 
}
	
</style>