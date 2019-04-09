<?php

require_once "core/init.php";

if(!isset($_SESSION['user'])){
  header('Location: login.php');
}

?>

<h1>Profile page <?=$_SESSION['user']?></h1>
<a href="logout.php">Logout</a>
