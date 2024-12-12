<?php
include 'header.php';

?>

<!-- <div class="preloader">
</div> -->

<div class="rb-main-content-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6" >
				<div class="main-content">
					<div class="top-content">
					<?php
						$sql = "SELECT * FROM posts ORDER BY id_post ASC LIMIT 0,1";
						$exe = mysqli_query($koneksi,$sql);
						foreach($exe as $top):
					?>
						<div class="content">
							<a href="">
								<div class="img-post">
									<img src="assets/img/post/<?= $top['img_post'];?>">
								</div>
								<div class="title-post">
									<h4><?= $top['title_post'];?></h4>
								</div>
							</a>
						</div>
					<?php
						endforeach;
					?>
					</div>
					<div class="bottom-content">
					<?php
						$sql = "SELECT * FROM posts ORDER BY id_post ASC LIMIT 1,2";
						$exe = mysqli_query($koneksi,$sql);
						foreach($exe as $bottom):
					?>
						<div class="content">
							<a href="">
								<div class="img-post">
									<img src="assets/img/post/<?= $bottom['img_post'];?>">
								</div>
								<div class="title-post">
									<h4><?= $bottom['title_post'];?></h4>
								</div>
							</a>
						</div>	
						
					<?php
						endforeach;
					?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="hot-content">
				  <?php
				  	$sql = "SELECT * FROM posts ORDER BY id_post ASC LIMIT 3,3";
				  	$exe = mysqli_query($koneksi,$sql);
				  	foreach($exe as $hot):
				  ?>		
				  <div class="content">
				  	<a href="">
				  		<div class="img-post">
						  	<img src="assets/img/post/<?= $hot['img_post'];?>">
					  	</div>
					  	<div class="title-post">
						  	<h6><?= $hot['title_post'];?></h6>
					  	</div>
				  	</a>
				  </div>
				  <?php
				  	endforeach;
				  ?>
				</div>
				
			</div>	
			<div class="col-md-3">
				<div class="recent-content">
				  <?php
				  	$sql = "SELECT * FROM posts ORDER BY id_post ASC LIMIT 7,2";
				  	$exe = mysqli_query($koneksi,$sql);
				  	foreach($exe as $recent):
				  ?>		
				  <div class="content">
				  	<a href="">
				  		<div class="img-post">
						  	<img src="assets/img/post/<?= $recent['img_post'];?>">
					  	</div>
					  	<div class="title-post">
						  	<h6><?= $recent['title_post'];?></h6>
					  	</div>
				  	</a>
				  </div>
				  <?php
				  	endforeach;
				  ?>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- <div class="rb-trending-content-area mt-4">
	<div class="container-fluid">
		<div class="col-md-4">
			<div class="trending-title">
				<h6>Trending</h6>
			</div>
			<?php
			  	$sql = "SELECT * FROM posts ORDER BY id_post ASC LIMIT 7,2";
			  	$exe = mysqli_query($koneksi,$sql);
			  	foreach($exe as $trending):
			  ?>
			<div class="content d-flex">
				<a href="">
			  		<div class="img-post w-50">
					  	<img src="assets/img/post/<?= $trending['img_post'];?>" class="img-fluid">
				  	</div>
				  	<div class="title-post w-50">
					  	<h6><?= $trending['title_post'];?></h6>
				  	</div>
			  	</a>		
			</div>
			  <?php
			  	endforeach;
			  ?>
		</div>
	</div>
</div> -->
<?php
include 'footer.php';

?>
