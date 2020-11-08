<?php
include "config.php";

    if(isset($_POST['submitbtn'])){

        $username = mysqli_real_escape_string($con, $_POST['usernametb']);
        $password = mysqli_real_escape_string($con, $_POST['passtb']);


        if ($username != "" && $password != ""){

            $sql_query = "select count(*) as cntUser from users where username='" . $username . "' and password='" . $password . "'";

            $result = mysqli_query($con, $sql_query);
            $row = mysqli_fetch_array($result);

            $count = $row['cntUser'];

            if($count > 0)
            {
                $_SESSION['username'] = $username;

                header('Location: home.php');
            }
            else
            {
                echo "Wrong username & password";
            }
        }
    }

?>

<html>
    <body>
        <form method="post" action="" id="loginform">
            <input type="text" name="usernametb" id="usernametb" placeholder="Username">
            <input type="password" name="passtb" id="passtb" placeholder="Password">
            <input type="submit" value="Login" name="submitbtn" id="submitbtn">
          </form>      
    </body>
</html>