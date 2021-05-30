<?php
 include_once "Connection/dbphp.inc.php";
 session_start();
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'phpmail/PHPMailer-master/src/Exception.php';
 require 'phpmail/PHPMailer-master/src/PHPMailer.php';
 require 'phpmail/PHPMailer-master/src/SMTP.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cancel Bbking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
         body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 240%;
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
            top:100px;
            left: 3.5px;
            opacity: 0.4;
        }
        .sidenav a {
            position: absolute;
            left: -200px;
            transition: 0.3s;
            padding: 15px;
            width: 220px;
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

        #show {
            top: 80px;
            background-color: #152B40;
        }

        #info {
            top: 140px;
            background-color: #103459;
        }

        #psw {
            top: 200px;
            background-color:#073D6C;
        }
        #cancel{
            top: 260px;
            background-color:#064379;
        }
        .content p{
            color:white;
            padding-top:1.5cm;
            font-size:18px;
            text-align:center;
        }
    
        form.search input[type=text] {
            padding: 10px;
            font-size: 17px;
            float: left;
            width: 65%;
            background: #f1f1f1;
            border-bottom-left-radius:5px;
            border-top-left-radius:5px;
        }

        form.search button {
            float: left;
            width: 28%;
             padding: 0.27cm;
            background: #053760;
            color: white;
            font-size: 17px;
            border-bottom-right-radius:5px;
            border-top-right-radius:5px;
            border-left: none;
            cursor: pointer;
        }

        form.search button:hover {
            background: #064579;
        }

        form.search::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
    <body>
        <div class="demo">
            <div class="topnav">
                <a href="LogOut.php"><i class='fas fa-door-open'></i> Logout</a>
                <a href="Contact login.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                <a href="About Us Login.php"> <i class="fa fa-group"></i> About Us</a>
                <a href="login home.php"> <i class="fa fa-fw fa-home"></i> Home</a>
                <div class="topnav-left">
                    <a class="active" href="#National Railways"><i class="fa fa-train"></i> National Railways</a>
                </div>
            </div>
            <div class="sidenav">
                <a href="editUserInfo.php" id="about">Edit personal info<i class='fas fa-user-edit'style="font-size:15px;padding-left: 1.5cm;"></i></a>
                <a href="Showing.php" id="show">Show trips and book <i class="fa fa-suitcase" style='padding-left: 0.8cm;'></i></a>
                <a href="myBooking.php" id="info">Show booked trip info <i class='fas fa-print' style="padding-left: 0.5cm"></i></a>
                <a href="updatePass.php" id="psw">Change password <i class='fas fa-key' style="padding-left: 1.2cm"></i></a>
                <a href="cancelBooking.php" id="cancel">Cancel booking <i class="fa fa-remove" style="padding-left: 1.8cm"></i></a>
            </div>
            <div class="content">
                <p><b>Hi 
                    <?php
                    echo $_SESSION['login_user'];
                    ?> 
                    ,</b>
                    </br>
                    Here you can cancel any trip you have booked
                    </br>
                    To do that you need only to type here your booked trip ID
                </p>
                <form class="search" action="" style="margin:auto;max-width:500px ;padding-left:0.5cm;" method="Post">
                    <input type="text" placeholder="Enter trip ID.." name="searchValue">
                    <button type="submit" name="cancel">Cancel booking</button>
                </form>

            </div>
            
        </div>
        <?php
           if(isset($_POST['cancel']))
           {
               if(isset($_SESSION['login_user']))
               {
                  mysqli_query($conn,"DELETE FROM `booked trip` WHERE trip_ID ='$_POST[searchValue]' AND USER_NAME='$_SESSION[login_user]';");

                  mysqli_query($conn,"UPDATE `trip` SET available_seats=available_seats+1 WHERE trip_ID='$_POST[searchValue]';");

                  $mail= new PHPMailer();
                    $mail->IsSMTP ();
                    $mail->Mailer = "smtp";
                    $mail->SMTPDebug = 0;
                    $mail->SMTPAuth = TRUE;
                    $mail->SMTPSecure ="tls";
                    $mail->Port =587;
                    $mail->Host ="smtp.gmail.com"; 
                    $mail->Username ="railwaynational58@gmail.com "; 
                    $mail->Password ="NationalRailways24";
                    $mail->IsHTML(true);
                    $mail->AddAddress("salma.smsm.samasemo@gmail.com", "Salma Ahmed");
                    $mail->SetFrom ("railwaynational58@gmail.com ","National Railways");
                    $mail->Subject="Cancel Booking Trip";
                    $content ="We note you that your booking trip is canceled, we wish you try our service in another time";

                    $mail->MsgHTML($content);
                    if(!$mail->Send()){
                        echo"Error while sending Email.";
                        var_dump($mail);
                    }

                  ?>
                <script type="text/javascript">
                   alert("Booking cancel successfuly");
                </script>
                <?php
               }
               else
               {
                   ?>

                    <script type="text/javascript">
                     alert("you need to login to can cancel booking");
                    </script>

                    <?php
               }
           }
        ?>
        </body>
    </html>