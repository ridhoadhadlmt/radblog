<?php
include '../function.php';

if(isset($_POST['save'])){
  
  $title = $_POST['title'];
  $content = $_POST['content'];
  $kategori = $_POST['category'];

  $nama_file = $_FILES['image']['name'];
  $source    = $_FILES['image']['tmp_name'];
  $folder = "../img/all-post/";
  $exe_img = move_uploaded_file($source,$folder.$nama_file);

  $table = 'posts';
  $field = array('id_post,title_post,content_post,category_post,img_post');
  $value = array("''","'$title'","'$content'","'$kategori'","'$nama_file'");
  insertPost($table,$field,$value);

}
?>
<ol class="breadcrumb">
 <li class="breadcrumb-item">Home</li>
 <li class="breadcrumb-item active">Add Post</li>
</ol>

<div class="add-form-area">
  <form action="" method="POST" class="add-form" enctype="multipart/form-data">
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
      <input type="text" class="form-control" placeholder="" name="title">  
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="form-control" id="content" name="content"></textarea>  
    </div>
    <div class="form-group">
      <label>Kategori</label>
      <select class="form-control" name="category">
        <option>Pilih Kategori</option>
      </select>   
      
    </div>
    <div class="form-group">
      <!-- <label>Image</label> -->
      <input type="file" class="" name="image"> 
    </div>
    <button type="submit" name="save" class="btn btn-add btn-primary">Add</button>
  </form> 
</div>

