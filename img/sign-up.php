<?php
require_once("session.php");
require_once("error.php");
include_once 'header.php';

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("menu.php");
?>
	<!-- Start Navigation -->

	<div id="contact" class="container" style="background-color: white; text-align: center">
		<h3 class="text-center">Felhasználó létrehozása</h3>
	</div>
<?php include_once 'sign-up-form.php'; ?>

<?php
if (isset($_POST['btn-signup'])) {
    $uname = strip_tags($_POST['txt_uname']);
    $umail = strip_tags($_POST['txt_umail']);
    $upass = strip_tags($_POST['txt_upass']);

    if ($uname == "") {
        $error[] = "provide username !";
    } else if ($umail == "") {
        $error[] = "provide email id !";
    } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Please enter a valid email address !';
    } else if ($upass == "") {
        $error[] = "provide password !";
    } else if (strlen($upass) < 8) {
        $error[] = "Password must be atleast 8 characters";
    } else {
        try {
            $user = new USER();
            $stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($row['user_name'] == $uname) {
                echo '<div class="alert alert-info">
                <i class="glyphicon glyphicon-log-in"></i> &nbsp; Regisztrált Emal
                    </div>';
                $error[] = "sorry username already taken !";
            } else if ($row['user_email'] == $umail) {
                echo '<div class="alert alert-info">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Regisztrált Emal
				</div>';
                $error[] = "sorry email id already taken !";
            } else {
                if ($user->register($uname, $umail, $upass)) {
                    echo '<div class="alert alert-info">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres regisztráció

                    </div>';
                    $user->redirect('sign-up.php?joined');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>

<?php
include_once("footer.php");
?>