
<?php 
$id= '';

    $id = $_REQUEST['id'];

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="form.css">
<style>

</style>
</head>
<body>
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   class="active" href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="contact.php">Contact</a></li>
</ul>
   
  <form action="" method="post" enctype="">
    
     <fieldset>
     <center>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>Write Something about the product</td>
          <td> <input type="text" name="review" id="review"/></td>
        </tr>
        <td>
            <input type="submit" name="" value="Submit">
        </td>
        </table>
        </center>
      </fieldset>
    </form>
  
</body></html>

</body>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

$review = $_REQUEST['review'];
    
$file = fopen('../Model/Order.txt', 'r');
while (!feof($file)) {
        $line = fgets($file);
        $list = explode('|', $line);

        if($list[0] == $id){

        $data = $list[0]."|".$list[1]."|".$review."|"."\r\n";
		$file = fopen('../Model/review.txt', 'a');
		fwrite($file, $data);
        header("location: OrderStatus.php");
        }
}
    }

?>