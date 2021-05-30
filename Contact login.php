<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Us Login</title>
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
        .Accordion{
            height: 10cm;
            position: absolute;
            top:5cm;
            left:12cm;


        }
        .Accordion .accordion {
            background-color:#E7EBED;
            color: #41464A;
            cursor:default;
            width: 30%;
            height: 1.2cm;
            text-align:left;
            padding-left: 0.2cm;
            outline: none;
            font-size: 18px;
            border:none;
            border-bottom-right-radius: 2px;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            opacity: 0.6;
            font-weight: bold;
        }
        .Accordion .panel {
            padding: 0 18px;
            width:100%;
            height: 50%;
            background-color:#143D51;
            opacity: 0.8;
            overflow: hidden;
            border-radius: 10px;
            border-top-left-radius: 0px;
        }
        .Accordion p{
            color: #f2f2f2;
            font-size: 15px;
        }
    </style>
    <body>
        <div class="demo5">
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
                
            <div class="Accordion">
                <button class="accordion"> Conatct </button>
                <div class="panel">
                    <p>Email: NationalRailwaySupport@.ern.gov</p>
                    <p>Complaints and suggestions (Tel): +20 2 24857889 </p>
                    <p>Customer services: 23855555 Mobile: 01112222925</p>
                    <p>Public Relations: 25777797</p>
                    <p>Complaints and suggestions (Fax): 25779995</p>


                </div>
            </div>
        </div>
    </body>
</html>
