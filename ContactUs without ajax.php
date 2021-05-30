<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Contact Us </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
        
    <style>
        body{
            background-image:url('imgs/train booking blur.png');
            background-size: 100% 800% ;
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
               <a href="ContactUs without ajax.php"> <i class="fa fa-fw fa-envelope"></i> Contact Us</a>
               <a href="About Us.php" class="bottom"> <i class="fa fa-group"></i> About Us</a>
               <a href="Welcome page.php"> <i class="fa fa-fw fa-home"></i> Home</a>
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
    </body>
</html>