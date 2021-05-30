<?php
 include_once "Connection/dbphp.inc.php";
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Trip Information</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
         body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 1500%;
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
        input[type=checkbox]{
            position: relative;
            left: -10cm;
            bottom: -0.61cm;
        }

        input[type=text]:focus {
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
            width:50%;
            height:auto;
            position:absolute;
            top:3cm;
            left:8cm;
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
        #start{
            position: relative;
            left:2.2cm;
        }
        #train_id{
            position: relative;
            left:2.85cm;
        }
        #end{
            position: relative;
            left:2.1cm;
        }
        #time{
            position: relative;
            left:3.45cm;
        }
        #date{
            position: relative;
            left:3.5cm;
        }
        #available_seats{
            position: relative;
            left:1.4cm;
        }
        #price{
            position: relative;
            left:3.5cm;
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
            <form name="Edit Information" action="" method="POST">
                <div class="container">
                    <h1>Edit Trip Details</h1>
                    <p>Please fill in this form to update trip datails.</p>
                    <hr>
                    <label for="trip_id"><b>Trip ID </b></label>
                    <input type="text" id="trip_id" placeholder="Enter Trip ID" name="trip_id" required>
                    </br>

                    <label for="train_id"><b>train ID</b></label>
                    <input type="text" id="train_id" placeholder="Enter Train ID" name="train_id" required>
                    </br> 

                    <label for="start"><b>Start From</b></label>
                    <input type="text" id="start" placeholder="Enter Start" name="start" required>
                    </br>

                    <label for="end"><b>Destination</b></label>
                    <input type="text" id="end" placeholder="Enter Destination" name="end" required>
                    </br>

                    <label for="time"><b>Time</b></label>
                    <input type="text" id="time" placeholder="Enter Time" name="time" required>
                    </br>

                    <label for="date"><b>Date</b></label>
                    <input type="text" id="date" placeholder="Enter Date" name="date" required>
                    </br>

                    <label for="degree"><b>Degree</b></label>
                    <input type="text" id="degree" placeholder="Enter Degree" name="degree" required>
                    </br>

                    <label for="available_seats"><b>Available seats</b></label>
                    <input type="text" id="available_seats" placeholder="Enter number of available seats" name="available_seats" required>
                    </br>


                    <label for="price"><b>Price</b></label>
                    <input type="text" id="price" placeholder="Enter Price" name="price" required>
                    </br>

                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px ; margin-left:70px">
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
            if(mysqli_query($conn,"UPDATE `trip` SET trainID='$_POST[train_id]',Start_from='$_POST[start]',distination='$_POST[end]',
             trip_time='$_POST[time]',trip_date='$_POST[date]',trip_degree='$_POST[degree]',available_seats='$_POST[available_seats]',
             price='$_POST[price]' WHERE 	trip_ID='$_POST[trip_id]' ;"))
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