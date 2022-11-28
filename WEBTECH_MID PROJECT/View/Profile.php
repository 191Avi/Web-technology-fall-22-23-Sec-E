<?php 


session_start();

$Name=$UName=$Phone="";

?>
<link rel="stylesheet" type="text/css" href="nav.css">
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   class="active" href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
<?php




        

    $file = fopen('../Model/users.txt', 'r');
    while (!feof($file)) {
            $line = fgets($file);
            $user = explode('|', $line);
            $UserName=trim($user[0]);

            if($_SESSION["Username"] == $UserName)
            {
               $Name=$user[1];
               $Phone=$user[2];
            }
    }

    echo "<center>";
    echo "<fieldset>";
    echo "<h3><b><center>Users's Profile</center></b></h3>";
    echo "<table >";

    echo "<tr>";
    echo "<td><b>Name : </b>".$Name."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Username : </b>".$_SESSION["Username"]."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Phone : </b>".$Phone."</td>";
    echo "</tr>";
    

echo "<td><a href='EditProfile.php'>Edit Profile</a></td>";

    echo "</table>";
    echo "</fieldset>";
    echo "</center>";


