<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM posts");
?>

<!-- <ol class="breadcrumb">
 <li class="breadcrumb-item">Home</li>
 <li class="breadcrumb-item active">Post</li>
</ol> -->

<div class="table-area">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th width="20%">Title</th>
        <th width="30%">Content</th>
        <th>Kategori</th>
        <th>Date</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   	<?php
   	$i = 1;
   	foreach($sql as $post):
   	?>
      <tr>
        <td><input type="checkbox" name=""></td>
        <td width="20%"><?= $post['title_post'];?></td>
        <td width="30%"><?= substr($post['content_post'],0,120),'...';?></td>
        <td><?= $post['category_post'];?></td>
        <td><?= $post['date_post'];?></td>
        <td><img src="../assets/img/post/<?= $post['img_post'];?>" width="80"></td>
        <td>
          <div class="btn-group">
            <a href="index.php?q=edit_post&id_post=<?= $post['id_post'];?>" class="btn btn-sm btn-success">Edit</a>
            <a href="" class="btn btn-sm btn-danger">Delete</a>
          </div>
        </td>
      </tr>
      <?php
      $i++;
    endforeach;
      ?>
    </tbody>
  </table>
</div>
