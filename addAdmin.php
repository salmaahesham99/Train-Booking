<?php
session_start();
include_once "Connection/dbphp.inc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
         body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 950%;
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
        .signupbtn{
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
        .cancelbtn, .signupbtn {
            width: 100%;
        }
        }
        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            background-color:#FEFEFE;
            height: auto;
            width: auto;
            border-radius: 10%;
            opacity: 0.5;
            color: #000;
            position: absolute;
            top:6cm;
            left: 24cm;
            padding: 15px;
            margin-top: 10px;
            border-bottom-left-radius: 0%;
            text-align: left;
        }

        #message p {
            padding: 10px 35px;
            font-size: 15px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
        #checked{
            position: relative;
            top:-0.2cm;
            left: 1.2cm;
        }
        #Repeat{
            position: relative;
            left:1.6cm;
        }
        #mail{
            position: relative;
            left:4cm;
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

            <form name="Registration" action="" method="POST">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to add new admin.</p>
                    <hr>

                    <label for="usrname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    </br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" id="psw" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </br>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" id="Repeat" placeholder="Repeat Password" name="psw-repeat" required>
                    </br>

                    <label for="firstName"><b>First Name</b></label>
                    <input type="text" placeholder="Enter firstName" name="firstName" required>
                    </br>

                    <label for="lastName"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter lastName" name="lastName" required>
                    </br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" id="mail" placeholder="Enter Email" name="email" required>
                    </br>

                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                    <label id="checked"> Remember me </label>
                    
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" name ="submit" class="signupbtn">Sign Up</button>
                    </div>

                </div>
            </form>
            <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
        </div>
        <script>
            var myInput = document.getElementById("psw");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");
            
            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
              document.getElementById("message").style.display = "block";
            }
            
            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
              document.getElementById("message").style.display = "none";
            }
            
            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }
              
              // Validate capital letters
              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }
            
              // Validate numbers
              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }
              
              // Validate length
              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }
            </script>
            <?php
    
               if(isset($_POST['submit']))
               {
                   $count=0;
                   $sql="SELECT user_name FROM `admin`";
                   $result=mysqli_query($conn,$sql);

                   /*check if username is exist or not*/
                   while ($row=mysqli_fetch_assoc($result))
                   {
                       if($row['user_name']==$_POST['username'])
                       {
                           $count=$count+1;
                       }
                   }
                  if($count==0)   
                   {
                       mysqli_query($conn,"INSERT INTO `admin` VALUES 
                       ('$_POST[username]','$_POST[psw]','$_POST[firstName]','$_POST[lastName]',' $_POST[email]');");
            ?>
                <script type="text/javascript">
                  alert("Add Successful");
                </script>
            <?php
                   }
                   else{
                    ?>
                    <script type="text/javascript">
                      alert("The username already exist.");
                    </script>
                <?php
                   }


               }

            ?>

            
    </body>
</html>

   