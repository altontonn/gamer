<?php
 readfile('bricks.html');
 ?>
<div id="form">
            <h2>Log in Here</h2>
            <form action= "index.php" method="post">
                Username:<br>
                <input type="text" name="username"><br><br>
                Password:<br>
                <input type="password" name="password"><br><br>
                <input type="submit" value="Login"><br>
                <a href="register.php">Register</a>
            </form>
            <?php  

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5($password);
        if (!empty($username) && !empty($password)) {
            $query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hash'";
            if ($query_run = mysql_query($query)) {
                $query_num_row = mysql_num_rows($query_run);
                if ($query_num_row==0) {
                    echo '<span style="color:red"><b>invalid Username/Password combinaton</b>';
                }elseif($query_num_row==1) {
                    $user_id = mysql_result($query_run, 0, 'id');
                    $_SESSION['user_id'] = $user_id;
                    header('Location: accept.php');
                }
            }
        }else {
            echo '<span style="color:red"><b>please fill in all the fields</b>';
        }
    }
?>
        </div> 
