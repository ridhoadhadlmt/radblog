<?php
  
  include '../function.php';

  $id = $_GET['id_post'];
  $kondisi = "WHERE id_post = $id";
  $table = 'posts';
  $field = '*';
  $exe = readData($table,$field,$kondisi);
  $ftch = mysqli_fetch_array($exe);


?>
<!-- <ol class="breadcrumb">
 <li class="breadcrumb-item">Home</li>
 <li class="breadcrumb-item active">Edit Post</li>
</ol> -->

<div class="edit-form-area">
  <form action="" method="POST" class="edit-form" enctype="multipart/form-data">
   <!-- <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] =='berhasil'){ ?>
        <div class="alert alert-primary">Berhasil</div>
      <?php }

      elseif($_GET['pesan'] =='gagal'){ ?>
        <div class="alert alert-danger ">Gagal</div>
      <?php }
    }
   ?> --> 
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" value="<?= $ftch['title_post'];?>" placeholder="" name="title">  
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="form-control" id="content" <?= $ftch['content_post'];?> name="content"></textarea>  
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <select class="form-control" name="category">
        <option>Pilih Kategori</option>
        <option><?= $ftch['category_post'];?></option>
      </select>   
      
    </div>
    <div class="form-group">
      <!-- <label>Image</label> -->
      <input type="file" class="" name="image"> 
    </div>
    <button type="submit" name="update" class="btn btn-add btn-success">Update</button>
    <a href="index.php?q=post" class="btn btn-danger">Batal</a>
  </form> 
</div>

