<?php
require_once("session.php");
require_once("error.php");
include_once 'header.php';

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
include_once("menu.php");
?>

<div id="contact" class="container" style="background-color: white">
    <h3 class="text-center">Felhasználó javítás</h3>
</div>
<?php include_once 'felhasznalo-jav-form.php'; ?>
