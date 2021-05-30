<?php
session_start();
include_once "Connection/dbphp.inc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit User Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
        body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 1150% ;
            background-repeat:repeat-y;
            font-family: Sans-serif;
            
    
        }
        .topnav {
            overflow: hidden;
            padding: 1% ;
            border-bottom: inset #BDBDBD 2px ;
            padding-top: 0.2cm;
            padding-right: 7cm;
            height: 1.5cm;
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
 
        /* Style all input fields */
            input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            }
        /* Full-width input fields */
        input[type=text] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            position: relative;
            left: 3cm;
            
        }
        input[type=password]{
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            position: relative;
            left: 3cm;
        }
        input[type=checkbox]{
            position: relative;
            left: -10cm;
            bottom: -0.61cm;
        }

        input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }
        input[type=password]:focus{
            background-color: #ddd;
            outline: none;
        }


        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #0164D7;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #202850;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn {
            float: left;
            width: 50%;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
        }
        .updatebtn{
            float: left;
            width: 50%;
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
            text-align: left;
            width:60%;
            height:auto;
            position:absolute;
            top:2.5cm;
            left:7cm;
            background-color:#143D51;
            opacity: 0.8;
            border-radius: 10px;
            color: white;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
        .cancelbtn, .updatebtn {
            width: 100%;
        }
        }
        #checked{
            position: relative;
            top:-0.2cm;
            left: 1.2cm;
        }
        #job{
            position: relative;
            left:4.4cm;
        }
        #mobilenumber{
            position: relative;
            left:2cm;
        }
        #mail{
            position: relative;
            left:4cm;
        }
        #Address{
            position: relative;
            left:3.5cm;
        }
        #id{
            position: relative;
            left:3cm;
        }
        #Ewallet_Number{
            position: relative;
            left:2cm;
        }
        #Ewallet_palance{
            position: relative;
            left:2cm;
        }
    </style>
    <body>
        <div class="demo6">
            <div class="topnav">
                <a href="LogOut.php"><i class='fas fa-door-open'></i> Logout</a>
                <a href="ContactUs without ajax.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                <a href="About Us.php" class="bottom"> <i class="fa fa-group"></i> About Us</a>
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
            
            <form name="Edit Information" action="" method="POST">
                <div class="container">
                    <h1>Edit Personal Information</h1>
                    <p>Please fill in this form to update personal information.</p>
                    <hr>

                    <label for="NationalID"><b>National ID</b></label>
                    <input type="text" id="id" placeholder="Enter NationalID" name="NationalID" required>
                    </br>

                    <label for="usrname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    </br>

                    <label for="firstName"><b>First Name</b></label>
                    <input type="text" placeholder="Enter firstName" name="firstName" required>
                    </br>

                    <label for="lastName"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter lastName" name="lastName" required>
                    </br>

                    <label for="Job"><b>Job</b></label>
                    <input type="text"  id="job" placeholder="Enter job" name="Job" required>
                    </br>

                    <label for="MobileNumber"><b>Mobile Number</b></label>
                    <input type="text" id="mobilenumber" placeholder="Enter MobileNumber" name="MobileNumber" required>
                    </br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" id="mail" placeholder="Enter Email" name="email" required>
                    </br>

                    <label for="Address"><b>Address</b></label>
                    <input type="text" id="Address" placeholder="Enter Address" name="Address" required>
                    </br>

                    <label for="Ewallet number"><b>E-wallet Number</b></label>
                    <input type="text" id="Ewallet_Number" placeholder="Enter Ewallet Number" name="EwalletNumber" required>
                    </br>

                    <label for="Ewallet palance"><b>E-wallet Palance</b></label>
                    <input type="text" id="Ewallet_palance" placeholder="Enter Ewallet palance" name="Ewalletpalance" required>
                    </br>

                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                    <label id="checked"> Remember me </label>
                    

                    <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" name ="submit" class="updatebtn">Update</button>
                    </div>

                </div>
            </form>  
        </div>
        <?php
         
         if(isset($_POST['submit']))
         {
            if(mysqli_query($conn,"UPDATE `traveler`SET UAER_NAME='$_POST[username]', FIRST_NAME='$_POST[firstName]' 
             , LAST_NAME='$_POST[lastName]' , Job='$_POST[Job]', MobileNumber='$_POST[MobileNumber]' , Email='$_POST[email]'
            , User_Address='$_POST[Address]' , Ewallet_No='$_POST[EwalletNumber]', Ewallet_palance='$_POST[Ewalletpalance]' WHERE NationalID='$_POST[NationalID]';"))
            {
                ?>
                <script type="text/javascript">
                    alert("Update successfuly...");
                </script>
                <?php
            }
             
         }
        ?>
    </body>
</html>