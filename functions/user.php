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

// username exist
function register_check_user($user){
  global $link;
  $user = mysqli_real_escape_string($link, $user);

  $query = "SELECT * FROM users WHERE username = '$user'";

  if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) == 0){
      return true;
    }else{
      return false;
    }
  }
}

?>
