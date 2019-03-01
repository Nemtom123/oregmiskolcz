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

<div id="contact" class="container" style="background-color: white">
	<h3 class="text-center">Heti menü szerkesztés</h3>
</div>

<?php
include_once 'hetimenuszerkesztes.php';
$lekerdezes = new oregmiskolcz\hetimenuszerkesztes();
$szerkeszt = $lekerdezes->runQuery("SELECT * FROM oregmiskolcz.hetimenu");
$szerkeszt->execute([]);
$berak = new namespace\oregmiskolcz\hetimenuszerkesztes();
include_once 'hetimenuszerkesztesform.php';
    if (isset($_POST['btn-rogzit'])) {
        try {
            foreach ($_POST['id'] AS $key => $item) {
                $tomb2 = $_POST['id'][$key];
                $tomb4 = $_POST['leves'][$key];
                $tomb5 = $_POST['masodik'][$key];
                $tomb6 = $_POST['date_tol'][$key];
                $tomb7 = $_POST['date_ig'][$key];
                $tomb8 = $_POST['napi_date'][$key];
                $tomb9 = $_POST['napok'][$key];
                $tomb10 = $_POST['ar'][$key];
                $berak->HetimenuUpDate($tomb2, $tomb4, $tomb5, $tomb6, $tomb7, $tomb8, $tomb9, $tomb10);
               /* $berak->redirect('hetimenuszerkesztes.php?joined');
                echo '<pre>';
                print_r($tomb9);
                echo '</pre>';*/
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
}

?>


<?php
include_once("footer.php");
?>
