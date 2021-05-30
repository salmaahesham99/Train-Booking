<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> About us login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
        body{
            background-image:url('imgs/train booking blur.png');
            background-size: cover;
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
            padding-top: 0.5cm;
            height: 10cm;
        }
        .Accordion h2{
            text-align: left;
            padding-left: 0.3cm;
            color: whitesmoke;
            font-size: 35px;
        }
        .Accordion .accordion {
            background-color:#143D51;
            color:white;
            cursor: pointer;
            width: 100%;
            height: 1.5cm;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            transition: 0.4s;
            border-radius: 5px;
            opacity: 0.6;
            border-width:5px;  
            border-style: solid;
            border-bottom-style:none;
            border-top:none;
            font-weight: bold;

        }
        .Accordion .accordion1 {
            background-color:#143D51;
            color: white;
            cursor: pointer;
            width: 100%;
            height: 1.5cm;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            transition: 0.4s;
            border-radius: 5px;
            opacity: 0.6;
            border-width:5px;  
            border-style: solid;
            border-bottom-style:none;
            border-top:none;
            font-weight: bold;
        }

        .Accordion .active, .accordion:hover {
            background-color: #517A8E;
            display: block;
        }
        
        /* Unicode character for "plus" sign (+) */
        .Accordion .accordion:after {
            content: '\002B';
            color: whitesmoke;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }
        
        /* Unicode character for "minus" sign (-) */
        .Accordion .active:after {
            content: "\2212";
        }

        .Accordion .panel {
            padding: 0 18px;
            width: 97%;
            background-color: #E7EBED;
            opacity: 0.8;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
            border-radius: 5px;
        }
        .Accordion .panel1 {
            padding: 0 18px;
            width: 97%;
            background-color: #E7EBED;
            opacity: 0.8;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
            border-radius: 5px;
        }
        .Accordion p{
            color: #64646B;
            font-size: 15px;
        }

    </style>
    <body>
        <div class="demo4">
            <div class="topnav">
                <a href="LogOut.php"><i class='fas fa-door-open'></i></i> Logout</a>
                <a href="Contact login.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                <a href="About Us login.php" class="bottom"> <i class="fa fa-group"></i> About Us</a>
                <a href="login home.php"> <i class="fa fa-fw fa-home"></i> Home</a>
                   <div class="topnav-left">
                       <a class="active" href="#National Railways"><i class="fa fa-train"></i> National Railways</a>
                    </div>
            </div>
            <div class="Accordion">
                <h2>Hi
                <?php
                    echo $_SESSION['login_user'];
                ?> 
                ,That will know you what we are. 
                </h2>

                <button class="accordion1">Introduction</button>
                <div class="panel1">
                    <p>National Railway is one of the largest economic institutions in the world, and is the largest in the area of transport services (passengers and goods).
                        It's considered the backbone of passenger transport, where the volume of railway passengers and goods transport is:
                    </br>
                    <br>
                        Passengers transport: 500 million passengers annually (about 1.4 million passengers a day).
                        <br>
                        Goods transport: 6 million tons annually.</p>
                </div>

                <button class="accordion">Railway network</button>
                <div class="panel">
                    <p>The total length of network is 9570 km
                    </br>
                        Paths of quadripartite lines 20 km
                    </br>
                        Paths of double lines 1466 km
                    </br>
                        Paths of single line 3667 km
                    </br>
                        Railways yards, workshops and warehouses</p>
                </div>

                <button class="accordion">Signals system</button>
                <div class="panel">
                    <p>Signals system on the heavy lines of movement to achieve the safety factors on them
                    </br>
                        Lines are working by electrical signals 15%
                    </br>
                        Lines are working by mechanical signal 85%</p>
                </div>

                <button class="accordion">Stations</button>
                <div class="panel">
                    <p>The total number of stations is 705. major, sub and medium -stations, Including:
                    </br>
                        Main stations number 22
                    </br>
                        Central stations number 59
                    </br>
                        Medium stations number 60
                    </br>
                        Small station's number 564</p>
                </div>

                <button class="accordion">Bridges and Tunnels</button>
                <div class="panel">
                    <p>Number of 885 Bridges and Tunnels
                    </br>
                        Railway bridges on the Nile and waterways, 511 bridge
                    </br>
                        Bridges above the Railway for cars, 58 Bridge
                    </br>
                        Tunnels for cars and pedestrians, 137 tunnel
                    </br>
                        Bridges overhead for pedestrians, 137 bridge</p>
                </div>

                <button class="accordion">Fleet of tractors</button>
                <div class="panel">
                    <p>342 German locomotive, capacity 2475 hp
                    </br>
                        45 Canadian locomotive, capacity 2475 hp
                    </br>
                        30 U.S. locomotive, capacity 1850 hp
                    </br>
                        253 Canadian locomotive, capacity 1650 hp
                    </br>
                        30 locomotive maneuver Spanish, capacity 1200 hp
                    </br>
                        80 new U.S. locomotive GE, capacity 4000 HP
                    </br>
                        40 new U.S. locomotive EMD, capacity 3245 hp
                    </br>
                        820 The total</p>
                </div>

                <button class="accordion">Passenger transport service</button>
                <div class="panel">
                    <p>the fleet of Passenger transport coaches is 3500 including 850 air-conditioned coaches the passenger transport service on the ENR of different qualities, ranging in speed from 90 to 120 km / h Fast sleep trains, and first and second AC luxury Special trains Renovated trains Suburban trains, with average speed of 90 km / h</p>
                </div>
            </div>
        </div>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            
            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                  /* change between adding and removing the "active" class,
                    to highlight the button that controls the panel */
                this.classList.toggle("active");

                /* change between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            }
            </script>
    </body>
</html>