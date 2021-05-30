<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home User</title>
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
  

        .content{
            position: absolute;
            top:3cm;
            left:8.5cm;
            border:solid #BDBDBD 2px;
            width: 50%;
            height: 100%;
            background-color: #152B40;
            opacity: 0.6;
        }

        .content p{
            color: white;
            font-size: 16px;
            text-align: left;
            margin:0.6cm;
        }
        .content a{
            border:2px  solid;
            border-radius:5px;
            width:5cm;
            font-size:40px;
            position:relative;
            left:1.5cm;
            color:#f5f5f5;
            background-color:#043b68;
            opacity:0.8;
            padding:0.2cm;
            text-decoration: none;
        }
        

        .slideshow-container {
            box-sizing: border-box;
            width: 275px;
            height: 200px;
            position:relative;
            left:27.7cm;
            top:2.5cm;
        }

        .slideshow-container img{
            vertical-align: right;
            width: 150px;
            height: 200px;
        }

        .slideshow-container .mySlides{
            display: none;
        }

        /* Number text (1/7 etc) */
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
            top:2.2cm;
           
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
                  <p>
                    <b>Welcome 
                    <?php
                    echo $_SESSION['login_user'];
                    ?> 
                    ,</b>
                    </br>
                    Create a reservation (you must agree to the terms and conditions)
                  </br>
                    The main traveler is the account holder who is the owner of the credit card with which the reservation is made, or a relative of the card holder.
                  </br>
                    At the end of the online reservation process, the basic data for each reservation (reservation number, train number, trolley number, seat number, triple name and national number) is shown on the screen and is also sent to the account holder's email.
                  </br>
                    The main traveler must keep this data.
                  </br>
                    On the day of travel, the traveler (and the accompanying companions, if any) will board the train.
                  </br>
                    The following documents are required with the traveler:
                  </br>
                </br>
                    Case A - if the traveler is the account holder
                    The reservation credit card and ID card
                    Basic data for reservations, printed or written (prefer printed)
                  </br>
                </br>
                    Case-2: If the main traveler is not the owner of the credit card
                    Traveler identity card (national ID or passport)
                    The credit card or a scanned image of the credit card that was reserved
                    Basic data for reservations, printed or written (prefer printed)

                  </br>
                </br>
                    General Provisions :
                  </br>
                  The train supervisor checks the required documents and returns the documents again to the traveler.
                 </br>
                  In the event that the account holder does not commit to writing the correct triple name of the traveler, 
                  the traveler is considered without a ticket and the fare and fine are collected from the traveler.
                 </br>
                 It is not permissible to buy travel tickets with the intention of selling them, and it is not permissible for anyone 
                 other than the competent employee to sell tickets or offer them for sale, and anyone who violates this is subject to fine or 
                 imprisonment according to Law No.(277) of 1959 and its amendments regarding the rail travel system.
                 </p>

                 </br>

                 <a href="Showing.php" class="bottom">Book Now </a>

                </div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 7</div>
                  <img src="imgs/slid7.jpeg" style="width:100%">
                  
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 7</div>
                  <img src="imgs/slid4.jpeg" style="width:100%">
                  
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 7</div>
                  <img src="imgs/slid1.jpg" style="width:100%">
                  
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="imgs/slid2.jpg" style="width:100%">
                    
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="imgs/slid3.jpg" style="width:100%">
                    
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="imgs/slid5.jpeg" style="width:100%">
                    
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="imgs/slid6.jpeg" style="width:100%">
                    
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

        </script> 
              
        
  </body>
</html>