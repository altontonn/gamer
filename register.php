<?php
readfile('bricks2.html');
require 'connect.php';
require 'core.php';
?>

<div class="loginbox">
    <h2>Please sign up</h2>
    <form action="register.php" method="post">
        Username:<br>
            <input type="text" name="username"><br><br>
        Password:<br>
            <input type="password" name="password"><br><br>
        Password_again:<br>
            <input type="password" name="password_again"><br><br>
        Firstname:<br>
            <input type="text" name="firstname"><br><br>
        Surname:<br>
            <input type="text" name="surname"><br><br>
            <input type="submit" value="Register">
</form>
 <?php
if (!loggedin()) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5($password);
        $password_again = $_POST['password_again'];
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        if (!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)) {
            if ($password != $password_again) {
                echo '<span style="color: red">Password do not match';
            }else {
                $query = "SELECT `username`, `firstname`, `surname` FROM `users` WHERE `username`='$username' AND `firstname`='$firstname' AND `surname`='$surname'";
                $query_run = mysql_query($query);
                if (mysql_num_rows($query_run)==1) {
                    echo '<span style="color: red">The name, '.$username.' '.$firstname.' '.$surname.' already exist';
                }else {
                    $query = "INSERT INTO `users` VALUES ('','".($username)."','".($password_hash)."','".($firstname)."','".($surname)."')";
                    if ($query_run = mysql_query($query)) {
                        header('Location: register_success.php');
                    }else {
                        echo '<span style="color: red">Sorry we couldn\'t register you at this time. Please try again later...';
                    }
                }
            }
        }else {
            echo '<span style="color: red">Please fill in all the fields';
        }
    }
}elseif (loggedin()) {
    echo '<span style="color: red">You\'ve been logged in and registered';
}
       
    ?>
</div>
   