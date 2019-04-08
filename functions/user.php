<?php

function register_user($user,$pass){
  global $link;

  $query = "INSERT INTO users (username,password) VALUES ('$user','$pass')";

  if(mysqli_query($link, $query)){
    return true;
  }else{
    return false;
  }
}

?>
