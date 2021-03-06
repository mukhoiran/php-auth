<?php
require_once "core/init.php";

$error = '';

// if already login
if(isset($_SESSION['user'])) header('Location: index.php');

//validatino register
if(isset($_POST['submit'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($user)) && !empty(trim($pass))){

    if (check_user($user) == 0){
      //insert into database
      if(register_user($user,$pass)) redirect_login($user);
      else $error = 'failed';

    }else $error = "username already exist";

  }else $error = "User or password can't empty";
}

require_once "view/header.php";
?>

<form class="" action="register.php" method="post">
  <label for="">Username</label><br>
  <input type="text" name="username" value=""><br><br>

  <label for="">Password</label><br>
  <input type="password" name="password" value=""><br><br>

  <input type="submit" name="submit" value="Register"><br><br>

  <?php if($error != '') {?>
    <div id="error">
      <?=$error?>
    </div>
  <?php } ?>
</form>

<?php
require_once "view/footer.php";
?>
