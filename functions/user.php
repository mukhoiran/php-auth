<?php

function register_user($user,$pass){
  global $link;

  //escape sql injection
  $user = mysqli_real_escape_string($link, $user);
  $pass = mysqli_real_escape_string($link, $pass);

  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,password) VALUES ('$user','$pass')";

  if(mysqli_query($link, $query)){
    return true;
  }else{
    return false;
  }
}

?>
