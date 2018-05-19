<?php
session_start();
if($_SESSION){
  if($_SESSION['profesi']=="Administrator")
  {
    header("Location: home_admin.php");
  }
  if($_SESSION['profesi']=="Kasir")
  {
    header("Location: home_kasir.php");
  }

}

include('proses_login.php');
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Sistem Apotik Sumber Waras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>
  <body id="login">
    <div class="login-logo">
      <h1><font style="font-style:italic; font-family:Roboto;" color="black">Sistem Informasi Apotik Sumber Waras</font></h1>
      <img src="images/group1.png" width="200" height="200"/>
    </div>
    
    <div class="app-cam" style="margin-top:-20px;">
      <form method="post" action="">
        <input type="text" class="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="password" required>
            <select name="profesi" class="form-control1" style="background-color:#000001;" required>
                      <option value="">---Pilih Login User---</option>
                      <option value="1">Administrator</option>
                      <option value="2">Kasir</option>
            </select>
            <br><br>
        <div class="submit">
          <input type="submit" name="submit" value="Login">
        </div>
        <?php echo $error; ?>
      </form>
    </div>
    
    <div class="copy_layout login" style="margin-top:50px;">
      <p>Copyright &copy; 2016  All Rights Reserved | Niko Ary Prayudha</p>
    </div>
  </body>
</html>