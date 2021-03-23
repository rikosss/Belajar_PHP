 <?php 
require_once "func_login.php";
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Dulu BosQ</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
       
 
    <div class="main" id="menu">
            <div class="container">

      <h2>Login</h2>
      <form method="POST" action="">
        <p><input type="text" name="user" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <button name="buttonlogin">Login</button>
      </form>
    </div>
  </div>
     <?php 

if(isset($_POST["buttonlogin"])){
            if(login($_POST['user'],$_POST['pass'])) {
              header('location:form_penjualan.php');
            }else{
              echo "username dan password salah";
            }
            
        }
 ?>
  
  
</body>
</html> 