<?php

require_once "core/init.php";

if(!isset($_SESSION['user'])){
  header('Location: login.php');
}

require_once "view/header.php";

?>

<h1>Profile page <?=$_SESSION['user']?></h1>

<?php
require_once "view/footer.php";
?>
