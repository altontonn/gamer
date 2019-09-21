<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #boxes .box{
            float: left;
            width: 30%;
            padding: 20px;
        }
        h1{
            text-align: center;
            font-family: Lucida Sans Unicode;
        }
    </style>
</head>
<body>
    <h1>Welcome to Sushi Hotel Gym</h1>
        <?php
            require 'connect.php';
            require 'core.php';
            if (loggedin()) {
                $username = getuserfield('firstname');
                $surname = getuserfield('surname');
                echo '<h1 style="background:palegreen; width:100%; height: 70px; padding-top:30px;"><marquee>You\'re logged in, '.$username.' '.$surname.'.</marquee><br><br></h1>';
                echo '<h1><a href="Logout.php">Logout</a></h1>';
            }else {
                include 'loginform.php';
            }
        ?>
        <section id="boxes">
            <h2 style="text-align: center; font-family: Cambria;">Section View</h2>
            <div class="box">
                <img src="images\gym view.jpg" width="100%" height="100%">
            </div>
            <div class="box">
                <img src="images\Facilities.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\gym marketing.jpeg" width="100%" height="270px">
            </div>
        </section>
        <section id="boxes">
            <h2 style="text-align: center; font-family: Cambria;">Boxing Section</h2>
             <div class="box">
                <img src="images\UpperKuts_Boxing.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\boxing fitness.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\boxing.jpeg" width="100%" height="270px">
            </div>
        </section>
        <section id="boxes">
            <h2 style="text-align: center; font-family: Cambria;">Weights/Dumbells</h2>
             <div class="box">
                <img src="images\dumbells - Copy.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\weight-room-istock-Aneese-900x600.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\weights.jpg" width="100%" height="270px">
            </div>
        </section><section id="boxes">
            <h2 style="text-align: center; font-family: Cambria;">Yoga Section</h2>
             <div class="box">
                <img src="images\yoga_sq.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\yoga-in-melbourne-1102410_960_720.jpg" width="100%" height="270px">
            </div>
            <div class="box">
                <img src="images\gym-plus-the-gym.jpg" width="100%" height="270px">
            </div>
        </section>
</body>
</html>


