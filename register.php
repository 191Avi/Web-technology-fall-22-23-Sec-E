<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post" action="registerCheck.php" enctype="">
    <fieldset > <legend>Registration </legend>
            <table align="center">
               
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="username" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="" placeholder=""/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="" placeholder=""/></td>
                </tr>
                <tr>
                <td>
                <label for="dog-names">User Type [User/Admin]:</label>
<td><select name="type" id="type">
    <option value="User">User</option>
  <option value="Admin">Admin</option>
</select></td>
                </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="" value="Register"> 
                        <a href="login.html">Login </a>
                    </td>
                </tr>
            </table>
       </form>
</body>
</html>