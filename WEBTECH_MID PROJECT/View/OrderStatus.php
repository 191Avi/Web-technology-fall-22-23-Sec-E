<?php 
 session_start();
 $Name=$Amount=$Status="";
?>

<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   class="active" href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="contact.php">Contact</a></li>
</ul>
<?php 





?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="nav.css">
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</style>
</head>
<body >
  <fieldset>
    <center>
    <h3><i>Order Status</i></h3>
     <form action="" method="post" enctype="">
    <table>
      <th>
      <td><b>Order Number</b></td>
        <td><b>Items Name</b></td>
        <td><b>Price</b></td>
        <td><b>Status</b></td>
      </th>
      <?php 
         $file = fopen('../Model/Order.txt', 'r');
         while (!feof($file)) {
                 $line = fgets($file);
                 $list = explode('|', $line);

                 if($list[1] == $_SESSION["Username"]){

                  echo "<tr>";
                  echo "<td></td>";
                  echo "<td>".$list[0]."</td>";
                  echo "<td>".$list[2]."</td>";
                  echo "<td>".$list[3]."</td>";
                  echo "<td>".$list[4];
                  if($list[4] == "Delivered"){
                    echo "<a href=review.php?id=".$list[0]." style='color:red; text-decoration:none'> Give a review</a>";
                    echo "</td>";
                  }
                  else{
                    echo "</td>";
                  }
                  echo "</tr>";
                 }
         }
      ?>
         
    </table>
      </form>
      </center>
    </fieldset>

    </form></body></html>


<?php 
?>

</body>
</html>