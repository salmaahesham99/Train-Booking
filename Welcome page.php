<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Train Booking </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
        
    <style>
        body{
            background-image:url('imgs/train booking.jpg');
            background-size: 100% 150% ;
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
        .dropdown {
            float: right;
            color: #EAEDF0;
            font-family: Sans-serif;
            text-align: left;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 15px;
        }
        .dropdown .dropbtn {
            font-size: 15px;
            text-align: left;
            border: none;
            outline: none;
            color: white;
            background-color: inherit;
            font-family:sans-serif;
            overflow: hidden;
            padding-top: 0.1cm;
            padding-right: 0.2cm;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a #225ACA background color to dropdown links on hover */
       .dropdown-content a:hover {
           color: #225ACA;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
         display: block;
        }
        .block {
            height: 200px;
            width: 50%;

        }
        .block p{
            padding: 10px;
            text-align: justify;
            color: #FEFEFE;
            text-align: left;
            font-family:sans-serif;
            font-size: 15px;
            font-weight: bold;

        }
        .block ul{
            padding: 15px;
            width: 300px;
            height: 200px;
            text-align: justify;
            color: #f2f2f2;
            text-align: left;
            font-family:sans-serif;
            font-size: 12px;
            bottom: 2cm;
            background-color:#143D51;
            opacity: 0.8;
            
        }

        /* Slideshow container */
        .slideshow-container {
            box-sizing: border-box;
            width: 275px;
            height: 200px;
            position:relative;
            left:28cm;
            bottom: 4cm;
        }

        .slideshow-container img{
            vertical-align: right;
            width: 150px;
            height: 200px;
        }

        .slideshow-container .mySlides{
            display: none;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 10px;
            width: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            position:relative;
            left:2.3cm;
            bottom: 4cm;
           
        }

        .dotline .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {.text {font-size: 11px}
        }

    </style>
    <body>
     <div id="demo">
        <div class="topnav">
            <a href="SignUp.php"><i class="fa fa-sign-in"></i> Sing Up</a>
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-fw fa-user"></i> Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Login.php"> Admin </a>
                    <a href="Login user.php"> User </a>
                </div>
            </div>
            <a href="#Contact" type="button" onclick="loadDoc()"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
            <a href="About Us.php" class="bottom"> <i class="fa fa-group"></i> About Us</a>
            <a href="Welcome page.php"> <i class="fa fa-fw fa-home"></i> Home</a>


               <div class="topnav-left">
                   <a class="active" href="#National Railways"><i class="fa fa-train"></i> National Railways</a>
                </div>
        </div>
        <div class="block">
            <p>
                Welcome, this service allows booking tickets for the National Railways Corporation for 
                air-conditioned trains of the first and second class only, where you can pay 
                the ticket fees electronically using credit cards.
            </br>
                Steps to use the service:
                <ul>
                    <li>New user registration: by entering user data: username, email, phone.</li>
                    <li>Log in to the system: by entering your username and password.</li>
                    <li>Selecting the station, arrival station and travel date.</li>
                    <li>If seats are available, the user selects the train number, number of seats, and class.</li>
                    <li>Enter the required payment information on the bank's payment screen.</li>
                    <li>The system displays data, and the data can be printed as it is sent to the user's email.</li>
                    <li>At the time of the trip, the user goes to the seat specified according to the train and cart and seat number in the reservation data, the user displays the reservation data for the train specialist on request.</li>
                </ul>
            </p>
            
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 7</div>
              <img src="imgs/Sunny train station.jpg" style="width:100%">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 7</div>
              <img src="imgs/Nagano Sta_.jpg" style="width:100%">
              
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 7</div>
              <img src="imgs/station.jpg" style="width:100%">
              
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="imgs/outside.jpg" style="width:100%">
                
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="imgs/inside.jpg" style="width:100%">
                
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="imgs/inside2.jpg" style="width:100%">
                
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="imgs/inside3.jpg" style="width:100%">
                
            </div>
        </div>
    </br>
            
    </div>
            
            <div class="dotline" style="margin-left:1060px;">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span> 
            </div>

    </div>

     <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML += this.responseText;
                }
                };
                xhttp.open("GET", "Contact Us.php", true);
                xhttp.send();
            }

        </script>
    </body>
</html>