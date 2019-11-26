<!DOCTYPE html>
<?php
session_start();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Log In</title>
  </head>
  <body>
    <?php
    include 'Header.php';

    print <<<HTML
    <div>
      <form name="form1" method="post" action="LoginCheck.php" >
        <table align = "center" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
              <td colspan="3"><strong>Member Login </strong></td>
            </tr>
            <tr>
              <td width="78">Username</td>
              <td width="6">:</td>
              <td width="294"><input name="myusername" type="text" id="myusername" class="error"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input name="mypassword" type="password" id="mypassword">
HTML;
    if (isset($_SESSION['badPass'])) {
      echo "<br> Username or password is incorrect";
    }

    print <<<HTML
            </td>
          </tr>
          <tr>
            <td><input type="submit" name="Submit" value="Login"></td>
          </tr>
          <tr>
            <td>
              <a href="NewAccount.php">Create an Account</a>
            </td>
          </tr>
      </table>
    </form>
  </div>
HTML;

    include 'Footer.php';
    ?>
  </body>
</html>
