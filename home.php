<?php
include "config.php";

// Check user login or not
if(empty($_SESSION['username'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Welcome <?php echo $_SESSION['username']  ?></h1>
        <p>We are now analyzing your browser fingerprints!</p>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>