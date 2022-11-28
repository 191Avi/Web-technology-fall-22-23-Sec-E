<?php 
  include ("../Controller/RegCheck.php");
?>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="form.css">
<html>
<head>
<style>
</style>

</head>
<body>
<ul>
        <li><a  href="Login.php">Login</a></li>
        <li><a  class="active" href="Reg.php">Registration</a></li>
    </ul>
  <fieldset>
    <center>
    <legend>REGISTRATION</legend>
     <form action="" method="post"enctype="">
    <table>
    <tr>
          <td>Name</td>
          <td> <input type="text" name="name" id="name" value="" placeholder="Enter Your Name "/><?php echo $ErrName; ?></td>
        </tr>

        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" id="username" value="" placeholder="Enter Your Username"/><?php echo $ErrUName; ?></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <input type="text" name="phone" id="phone" value="" placeholder="Enter Your Phone Number"/><?php echo $ErrPhone; ?></td>
        </tr>

        <tr>
          <td>Password</td>
          <td> <input type="password" name="password" id="password" value="" placeholder="Enter Your Password" /><?php echo  $ErrPass;?></td>
        </tr>
         <tr>
          <td>Confirm Password </td>
          <td> <input type="password" name="cpassword" id="cpassword" value="" placeholder="Enter Your Confirm Password"/><?php echo $ErrCPass; ?></td>
        </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Sign up">
            <span>Already have an account?<a href="Login.php"> SignIn</a></span>
          </td>
          </tr>
        </table>
      </form>
      </center>
    </fieldset>

    </form></body></html>




</body>
</html>