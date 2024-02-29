<?php
   include "navbar.php"; 
   include "footer.php";
   // Replace these with your actual database credentials
   $hostname = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'blooddonation';

   // Create a connection to MySQL
   $conn = new mysqli($hostname, $username, $password, $database);

   // Check the connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $query = mysqli_query($conn, "SELECT * FROM `awareness_camps`");
   //$result = mysqli_fetch_array($query);
   
  

   
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BloodDonationCamp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url("images/background.jpg");
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php while($result = mysqli_fetch_array($query)){
                if($result['id']%2==0){?>
                    <div class="panel panel-default" style = "width:35%;margin-left:120px;">
                        <div class="panel-body">
                           <span>Name of Camp: <?php echo $result['name']; ?></span><br>
                           <span>Contact No: <?php echo $result['Contact_no']; ?></span><br>
                           <span>Address: <?php echo $result['address']; ?></span><br>
                           <span>Date & Time: <?php echo $result['date_time']; ?></span><br>
                        </div>
                    </div>
                <?php } else{ ?>
                    <div class="panel panel-default" style = "width:35%; margin-left:400px;">
                        <div class="panel-body">
                           <span>Name of Camp: <?php echo $result['name']; ?></span><br>
                           <span>Contact No: <?php echo $result['Contact_no']; ?></span><br>
                           <span>Address: <?php echo $result['address']; ?></span><br>
                           <span>Date & Time: <?php echo $result['date_time']; ?></span><br>
                        </div>
                    </div>
            <?php }} ?>
         
                    
            
            
        </div>
    </body>
</html>
