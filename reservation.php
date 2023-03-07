<?php
   
    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_available($checkin, $checkout);
        if(!($result))
        {
            echo $result;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel PARADISE</title>
    <link href="css/bootstrap.css" rel="stylesheet">    
   
   <style>
    body{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
	    P{
			font-size: 13px;
            background-color:black;
		}
        .row{
            color:blue;
            text-align:justify;
        }      	
    </style>    
</head>
<body>
    <div class="container">    
             <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="reservation.php">Online Reservation</a></li>
                   <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/lokesh.loveking.5"><img src="images/facebook.png"></a></li>
                    <li><a href="https://twitter.com/lokesh_jl"><img src="images/twitter.png"></a></li>                     
                </ul>
            </div>
        </nav>
        
       <div class='row'>
                <form action="" method="post" name="room">       
               <div class="form">
                    <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                    <input type="date"  name="checkin">
              </div>
               <div class="form">
                    <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                    <input type="date"  name="checkout">
                </div>
                 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button>Check Availability</button>

            </form>
           </div>
</body>
</html>