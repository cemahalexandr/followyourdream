<?php include_once "inc/db.php";?>
<?php
$generalId = 'dreambus';

$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM users WHERE id='1'");
$db_arr = mysql_fetch_array($db_query);
?>
<?php
session_start();

if($_SESSION['admin']){
	header("Location: index-nav.php");
	exit;
}

$admin = $db_arr['login'];
$pass = $db_arr['password'];
if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == $_POST['pass']){
		$_SESSION['admin'] = $admin;
		header("Location: index-nav.php");
		exit;
	}else {
		echo '<div class="callout callout-danger">';
		echo '<p>Логин или пароль неверны!</p>';
		echo '</div>';
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FollowYourDream Admin</title>
	<?php include_once "inc/links-admin-lte.php";?>
</head>
<body style="background: #dcdcdc;">


<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-push-3">
			<form method="post" style="margin-top: 20px;">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Login form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="form-group">
							<?php

							?>
						</div>
<!--						<div class="callout callout-danger">-->
<!--							<h4>I am a danger callout!</h4>-->
<!---->
<!--							<p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,-->
<!--								like these sweet mornings of spring which I enjoy with my whole heart.</p>-->
<!--						</div>-->
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Username</label>

							<div class="col-sm-10">
								<input name="user" type="text" class="form-control" id="" placeholder="Username">
							</div>
						</div>
						<div class="form-group" style="padding-top: 40px;">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>

							<div class="col-sm-10">
								<input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<input type="submit" name="submit" value="Войти" class="btn btn-info pull-right"/>
					</div>
					<!-- /.box-footer -->

				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>

<!---->
<!--<p><a href="index.php">Главная</a> <a href="admin.php">Админка</a></p>-->
<!--<hr />-->
<!--Это страница авторизации.-->
<!--<br />-->
<!---->
<!---->
