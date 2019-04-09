<?php
require_once "core/init.php";

//validatino register
if(isset($_POST['submit'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($user)) && !empty(trim($pass))){

    if(login_check_user($user)){
      if(check_data($user,$pass)){
        $_SESSION['user'] = $user;
        header('Location: index.php');
      }else{
        echo 'Wrong password';
      }
    }else{
      echo 'Username not exist';
    }

  }else{
    echo "User or password can't empty";
  }
}

require_once "view/header.php";
?>

<form class="" action="login.php" method="post">
  <label for="">Username</label><br>
  <input type="text" name="username" value=""><br><br>

  <label for="">Password</label><br>
  <input type="password" name="password" value=""><br><br>

  <input type="submit" name="submit" value="Register">
</form>

<?php
require_once "view/footer.php";
?>
