<?php
 include_once "Connection/dbphp.inc.php";
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> My Booked trip </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
         body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 300%;
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
        .content{
            color:white;
            padding-left:3cm;
            padding-top:1.5cm;
            font-size:18px;
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
                    Here all your trip you have booked
                </p>
            </div>
        </div>

        <?php
            if(isset($_SESSION['login_user']))
            {
                $result=mysqli_query($conn,"SELECT * FROM `booked trip` INNER JOIN `trip` ON `booked trip`.trip_ID= `trip`.trip_ID AND USER_NAME='$_SESSION[login_user]';");
                
                if(mysqli_num_rows($result)==0)
               {
                    echo"Sorry! , there's no booked trip for you..";

                    
                } else
                {
                    echo "<table class= 'table table-bordered table-hover'  style='position:relative; left:2.5cm; top:0.5cm; border-collapse: collapse;width: 90%;'>";
                        echo "<tr>";
                            
                            //table header
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Username"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Trip ID"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Train ID"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Start from"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Distination"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>";  
                            echo "Trip Time"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>";  
                            echo "Trip Date"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>"; 
                            echo "Degree"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>";  
                            echo "Available Seats"; echo"</th>";
                            echo "<th style=' border: 0.5px solid #ddd;padding: 8px; padding-top: 12px;padding-bottom: 12px;text-align: left;background-color:#053760;color: white;'>";  
                            echo "Price"; echo"</th>";
                        echo"</tr>";
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo"<tr style='background-color:#f5f5f5; opacity:0.8;'>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['USER_NAME']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['trip_ID']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['trainID']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['Start_from']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['distination']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['trip_time']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['trip_date']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['trip_degree']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['available_seats']; echo "</td>";
                            echo "<td style=' border: 0.5px solid #ddd;padding: 8px;'>"; echo $row['price']; echo "</td>";
                            echo"</tr>";   
                        }
                    echo"</table>";

                }
                    

            }else
            {
                echo"</br></br></br>";
                echo"<h2><b>";
                echo"You must login first to see your booked trip..";
                echo"</b></h2>";
            }
        ?>
    </body>
</html>