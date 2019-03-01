<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Öreg Miskolcz Hotel & Étterem</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<div class="signin-form">

	<div class="container">


		<form class="form-signin" method="post" id="login-form" action="">
			<div class="hr-sect"
			     style="color:#704d32;font-family: 'Edwardian Script ITC', 'papyrus', serif;font-size: 38px; font-style: italic;font-weight: bold;
 margin-top: 32px; text-align: center">
				Öreg Miskolcz Hotel & Étterem
			</div>
			<h2 class="form-signin-heading" style="text-align: center">Bejelentkezés.</h2>
			<hr/>

			<div id="error">
                <?php
                if (isset($error)) {
                    ?>
					<div class="alert alert-danger">
						<span class="glyphicon glyphicon-warning-sign" style="font-style: italic;"></span> &nbsp; <?php echo $error. $uname. $upass; ?> !
					</div>
                    <?php
                }
                ?>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="txt_uname_email"
				       placeholder="Felhasználó név  vagy Email cím"
				       required/>
				<span id="check-e"></span>
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="txt_password" placeholder="Jelszó"/>
			</div>

			<hr/>

			<div class="form-group">
				<button type="submit" name="btn-login" class="btn btn-default">
					<span class="glyphicon glyphicon-log-in"></span> &nbsp; Bejelentkezés
				</button>
			</div>
		</form>

	</div>

</div>
</body>
</html>







