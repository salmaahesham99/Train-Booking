<?php
  include_once "Connection/dbphp.inc.php";
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Login User </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
        
    <style>
        body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 125% ;
            background-repeat:repeat-y;
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
        form {
            border: 3px solid white;
            width:45%;
            height:auto;
            position:relative;
            left:9.5cm;
            top:0.5cm;
            border-radius:5px;

        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius:5px;

        }

        button {
            background-color:#0164D7;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity:0.9;
            border-radius:5px;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #202850;
            border-radius:5px;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
    </style>
    <body>
     <div id="demo">
        <div class="topnav">
            <a href="SignUp.php"><i class="fa fa-sign-in"></i> Sing Up</a>
            <a href="Login.php"><i class="fa fa-fw fa-user"></i> Login</a>
            <a href="ContactUs without ajax.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
            <a href="About Us.php" class="bottom"> <i class="fa fa-group"></i> About Us</a>
            <a href="Welcome page.php"> <i class="fa fa-fw fa-home"></i> Home</a>
               <div class="topnav-left">
                   <a class="active" href="#National Railways"><i class="fa fa-train"></i> National Railways</a>
                </div>
        </div>
        <form name="Login" action="" method="post">
            <div class="imgcontainer">
               <img src="imgs/profile.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                </br>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                </br>
                    
                <button type="submit" name="submit">Login</button>
                <label>
                </br>
                <input type="checkbox" checked="checked" name="remember"> <b>Remember me</b>
                </label>
            </div>

            <div class="container" style="background-color:white ">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        <?php
         if(isset($_POST['submit']))
         {
            $count=0;
            $result= mysqli_query($conn,"SELECT * FROM `traveler` WHERE UAER_NAME ='$_POST[uname]' AND User_Password='$_POST[psw]';");
            $count= mysqli_num_rows($result);

            if($count==0)
            {
                ?>
                    <div class="alert alert-danger" style="background-color:white ; opacity:0.9 ;width:25% ; color: red ">
                        <strong> The username and password does't match.</strong>
                    </div>
                <?php
            }
            else{

                $_SESSION['login_user']=$_POST['uname'];
                ?>
                 <script type="text/javascript">
                   window.location="login home.php"
                  </script>
                <?php
            }
         }
         else{

         }
         

        ?>

</body>
</html>