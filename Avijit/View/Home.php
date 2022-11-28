<?php 
session_start();
if(!isset($_SESSION["Username"])){
    header("location: Login.php ");
}

$name="user";
$value=$_SESSION['Username'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(10),"/");
    
}

if(!isset($_COOKIE[$name]))
{
    echo "New Cookie Saved : ".$_SESSION['Username'];
}
else 
echo "Cookie Found : ".$_COOKIE["user"];



?>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="form.css">
  <?php  echo "<center> <h2>Welcome  to Shop Management Mr.<b>" .$_SESSION["Username"] ."</b></h2></center><br>"?>

    <center>
<span>
     <a href="Profile.php"> View Profile  </a><br><br>
      <a href="OrderStatus.php"> Order Status </a><br><br>
    <a href="../Controller/logout.php"> Log Out</a>
</span>
</center>