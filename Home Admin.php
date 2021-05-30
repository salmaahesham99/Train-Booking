<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
         body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 730%;
            background-repeat: repeat-y;
            font-family: Sans-serif;
        }

        .topnav {
            overflow: hidden;
            padding: 1% ;
            border-bottom: inset #BDBDBD 2px ;
            padding-top: 0.2cm;
            padding-right: 5cm;
        }

        .topnav a {
            float: right;
            color: #EAEDF0;
            font-family: Sans-serif;
            text-align: left;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 15px;
        }
        .topnav a:hover , .dropdown:hover .dropbtn{
            color: lightgrey;
        }

        .topnav a.active {
        color: white;
        }
        .topnav-left a {
            font-family: Sans-serif;
            font-size: 30px;
            color: white;
            float: left;
            padding-top: 0.1cm;
            padding-left: 3cm;
            cursor:default;
        }
        .sidenav{
            position: absolute;
            top:130px;
            left: 3.5px;
            opacity: 0.4;
        }
        .sidenav a {
            position: absolute;
            left: -180px;
            transition: 0.3s;
            padding: 15px;
            width: 200px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            border-radius: 0 5px 5px 0;
        }

        .sidenav a:hover {
            left: 0;
        }

        #about {
            top: 20px;
            background-color: #141D26;
        }

        #newAdmin {
            top: 80px;
            background-color: #152B40;
        }

        #newTrain {
            top: 140px;
            background-color: #103459;
        }

        #newTrip {
            top: 200px;
            background-color:#073D6C;
        }
        #updateTrain{
            top: 260px;
            background-color:#064379;
        }
        #editTrip{
            top: 320px;
            background-color:#075391;
        }
        .sidenav i{
            padding-left: 0.3cm;
        }
        .content{
            position: absolute;
            top:3cm;
            left:8.5cm;
            width: 50%;
            height: 80%;
            
        }
        .content img.avatar {
            width: 50%;
            position:relative;
            left:4.5cm;
            top:0.5cm;
            border-radius:70px;
            opacity:0.8;
            
        }
        .content p{
            color:white;
            font-size:30px;
            text-align:center;
        }
         
    </style>
    <body>
        <div class="demo">
            <div class="topnav">
                <a href="LogOut.php"><i class='fas fa-door-open'></i> Logout</a>
                <a href="Contact login.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                <a href="About Us Login.php"> <i class="fa fa-group"></i> About Us</a>
                <a href="Home Admin.php"> <i class="fa fa-fw fa-home"></i> Home</a>
                <div class="topnav-left">
                    <a class="active" href="#National Railways"><i class="fa fa-train"></i> National Railways</a>
                </div>
            </div>
            <div class="sidenav">
                <a href="editAdminInfo.php" id="about">Edit personal info<i class='fas fa-user-edit'style="font-size:18px;padding-left: 1cm"></i></i></a>
                <a href="addAdmin.php" id="newAdmin">Add Admin <i class='fas fa-user-plus' style="padding-left: 2.2cm"></i></a>
                <a href="addTrain.php" id="newTrain">Add Train <i class="fa fa-train" style="padding-left: 2.5cm"></i></a>
                <a href="addTrip.php" id="newTrip">Add Trip <i class="fa fa-plus-square" style="padding-left: 2.8cm"></i></a>
                <a href="updateTrainDetails.php" id="updateTrain">Update Train details <i class="fa fa-refresh"></i></a>
                <a href="updateTripDetails.php" id="editTrip">Edit Trip details <i class="fa fa-pencil-square" style="padding-left: 1.3cm;font-size:20px"></i></a>
            </div>
            
            <div class="content">
            <p><b> Welcome 
                <?php
                    echo $_SESSION['login_user'];
                ?> 
                </b>
                </br>
               We are one family working hard for the convenience of our customers
            </p>
            <img src="imgs/28.jpg" alt="Avatar" class="avatar">
        </div>
    </body>
</html>