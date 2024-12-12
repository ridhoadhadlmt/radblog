<?php
include '../koneksi.php';

session_start();

if(isset($_POST['login'])){
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	$sql ="SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
	$login = mysqli_query($koneksi,$sql);
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$ftch = mysqli_fetch_assoc($login);
		$_SESSION['username'] = $user;
		$_SESSION['pasword'] = $pass;
		$_SESSION['level'] = 'admin';
		header('location:../admin/');

	}
	else{
		$msg = "Username atau Password anda salah";
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.4.1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome-5.6.3/css/all.css">
	
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light">
 <div class="container-fluid col-md-10">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#insNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="../" class="navbar-brand">radBlogs</a>
  
 </div> 
</nav>

<div class="form-login">
<form action="" class="form" method="POST">
 <h4>LOGIN</h4>

 <?php if(isset($msg)): ?>
 <div class="alert alert-danger alert-dismissible fade show"><strong><?= $msg ;?></strong>
 	<button type="button" class="close" data-dismiss="alert" aria-label="alert"><span aria-hidden="true">&times;</span></button> 
 </div>	
<?php endif; ?>
 <div class="form-group">
 <input type="text" class="" required="" id="user" name="user"> 	
 <label>Username</label>
 <div class="form-group">
 <input type="password" class="" id="pass" name="pass" required=""> 
 <label>Password</label>
 </div>	
 <button class="btn btn-default" name="login">LOGIN</button>	
</form>	
</div>
</body>
</html>
<script type="text/javascript" src="../bootstrap-4.3.1/js/jquery.js"></script>
<script type="text/javascript" src="../bootstrap-4.3.1/js/bootstrap.js"></script>

<style type="text/css">
@font-face{
	font-family: 'PTSerif';
	src: url('../assets/font/PTSerif/PTSerif-Regular.ttf');
}
@font-face{
	font-family: 'Orbitron';
	src: url('../assets/font/Orbitron/static/Orbitron-Regular.ttf');
}
body{
	font-family: 'PTSerif';
	background: #F9F9FA;
	
}
.navbar{
	background: #fff;
	padding-top: 20px;
	padding-bottom: 20px;
}
.navbar-brand{
	font-family: 'Orbitron';
}
.form-login{
	background: #FFF;
	position: absolute;
	left: 50%;
	top: 50%;
	font-family: 'PTSerif', sans-serif;
	/*border:1px solid #ddd;*/
	border-radius: 5px;
	box-shadow: 1px 0 5px #ccc;
	width: 35%;

	transform: translate(-50%,-50%);
}
.form-login h4{
	text-align: center;
	font-family: 'Orbitron';
	margin-bottom: 20px;
	letter-spacing: 1px;
}
.form-login label{
	position: absolute;
	left: 0;
	top: 0;
	font-size: 16px;
	transition: .5s;
	pointer-events: none;
}
.form{
	position: relative;
	padding: 30px 40px;
}
.form-group{
	position: relative;
}
.form-login input{
	border: none;
	background: transparent;
	width: 100%;
	font-size: 14px;
	margin-bottom: 30px;	
	outline: none;
	border-bottom: 1px solid #ddd;
	/* border-color: #414347; */
}
.form-group input:focus ~label,
.form-group input:valid ~label{
	top: -16px;
	color: #2B2D32;
	font-size: 13px;
}
.form-login .form-group #pass{
	margin-bottom: 0;
}
.form-login .btn{
	margin-top: 0;
	border-radius: 5px;
	padding: 5px 20px;
	letter-spacing: 1px;
	font-size: 14px;
	color:#FFF;
	background: #162A4C;
}
.alert{
	margin-bottom: 20px;
}
.alert strong{
	font-size:14px; 
}
</style>