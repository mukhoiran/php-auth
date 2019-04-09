<?php

function register_user($user,$pass){
  global $link;

  //escape sql injection
  $user = escape($user);
  $pass = escape($pass);

  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password) VALUES ('$user','$pass')";

  if(mysqli_query($link, $query)) return true;
  else return false;
}

//check login password
function check_data($user,$pass){
  global $link;

  //escape sql injection
  $user = escape($user);
  $pass = escape($pass);

  $query = "SELECT password FROM users WHERE username = '$user'";
  $result = mysqli_query($link, $query);
  $result = mysqli_fetch_assoc($result);
  $hash = $result['password'];

  if(password_verify($pass, $hash)) return true;
  else return false;
}

//avoid injection
function escape($data){
  global $link;
  return mysqli_real_escape_string($link,$data);
}

function redirect_login($user){
  $_SESSION['user'] = $user;
  header('Location: index.php');
}

function check_user($user){
  global $link;
  $user = escape($user);

  $query = "SELECT * FROM users WHERE username = '$user'";

  if($result = mysqli_query($link, $query)){
    return mysqli_num_rows($result);
  }
}

//flash message
function flash_delete($msg){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
