<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Register</title>
    <link rel="stylesheet" href="view/style.css">
  </head>
  <body>

  <header>
    <h1>Login and Resgiter</h1>

    <nav>
      <a href="index.php">Home</a>
      <?php if(!isset($_SESSION['user'])){ ?>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      <?php } else { ?>
        <a href="logout.php">Logout</a>
      <?php } ?>
    </nav>
  </header>
