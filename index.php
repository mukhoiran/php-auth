<?php

require_once "core/init.php";

if(!isset($_SESSION['user'])){
  $_SESSION['msg'] = 'Please login first';
  header('Location: login.php');
}

require_once "view/header.php";

?>

<h1>Profile page <?=$_SESSION['user']?></h1>

<br><br>
<?php if(check_status($_SESSION['user'])) { ?>
  <div>Halo Admin</div>
<?php } ?>

<?php
require_once "view/footer.php";
?>
