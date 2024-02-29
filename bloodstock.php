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
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['fetch']))
    { ?>
    <table class="table table-bordered" style="margin-left:280px; width:55%">
                    <thead style="background-color:brown; color:white; margin-left:320px; width:55%;">
                        <tr>
                            <th>Blood Bank Name</th>
                            <th>Blood Group</th>
                            <th>Available Stock</th>
                        </tr>
                    </thead>
        <?php $query = mysqli_query($conn, "SELECT * FROM `bloodstocks`");
        while($result = mysqli_fetch_array($query))
        {?>
            <tbody style="margin-left:320px; width:55%;"> 
                            <tr>
            
              <?php  // Retrieve user input from the form
                $bb_name = $_POST["bb_name"];
                $blood_grp = $_POST["blood_grp"];
                //echo $result['bb_name'];
                // Validate user credentials (This is a basic example and should be enhanced for security)
                
                 
                     if ($result['address'] == $bb_name && $result['blood_grp'] == $blood_grp ){?>
                       
                                <td><?php echo $result['bb_name']; ?></td>
                                <td><?php echo $result['blood_grp']; ?></td>
                                <td><?php echo $result['unit']; ?></td>
                            </tr>
                        </tbody>
                    
                <?php }
            
        } ?> </table>  
    <?php }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blood Stock</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <style>
        h2{
            color:brown;
            text-align:center;
        }

        .container{
            color:brown;
            width:70%;
            text-align:center;
        }

        .th{
            text-align:center;
        }
    </style>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Blood Type Capability Chart</h2><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Who can Donate</th>
                                <th>Who can Receive</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>O+</td>
                                <td>O+, A+, B+, AB+</td>
                                <td>O+, O-</td>
                            </tr>

                            <tr>
                                <td>A+</td>
                                <td>A+, AB+</td>
                                <td>A+, A-, O+, O-</td>
                            </tr>

                            <tr>
                                <td>B+</td>
                                <td>B+, AB+</td>
                                <td>B+, B-, O+,O-</td>
                            </tr>

                            <tr>
                                <td>AB+</td>
                                <td>AB+</td>
                                <td>Everyone</td>
                            </tr>

                            <tr>
                                <td>O-</td>
                                <td>Everyone</td>
                                <td>O-</td>
                            </tr>

                            <tr>
                                <td>A-</td>
                                <td>A+, A-, AB+, AB-</td>
                                <td>O-, A-</td>
                            </tr>

                            <tr>
                                <td>B-</td>
                                <td>B+, B-, AB+, AB-</td>
                                <td>O-, B-</td>
                            </tr>

                            <tr>
                                <td>AB-</td>
                                <td>AB+, AB-</td>
                                <td>O-, A-, B-, AB-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <h2>Blood Availability</h2><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Who can Donate</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>O+</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>A+</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>B+</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>AB+</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>O-</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>A-</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>B-</td>
                                <td>Available</td>
                            </tr>

                            <tr>
                                <td>AB-</td>
                                <td>Available</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- search for blood -->
            <h1>Blood Stock Availability</h1>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:brown; font-size:20px; color:white;">Search Blood Stock</div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <form method="post" action="#">
                        <div class=" row">
                            <div class="form-group col-md-6">
                                <label for="bb_name">Select Blood Bank Name:</label>
                                    <select name="bb_name">
                                            <option value ="Select Blood Bank Name">Select Blood Bank Name</option>
                                        <?php
                                                $query = mysqli_query($conn, "SELECT * FROM `bloodbanks`");
                                                while($result = mysqli_fetch_array($query)){?>
                                                    <option value = "<?php echo $result['address']; ?>"><?php echo $result['address']; ?></option>
                                            <?php }
                                        ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="blood_grp">Select Blood Group:</label>
                                    <select name="blood_grp">
                                        <option value ="Select Blood Bank Name">Select Blood Group</option>
                                        <option value ="A+">A+</option>
                                        <option value ="A-">A-</option>
                                        <option value ="B+">B+</option>
                                        <option value ="B-">B-</option>
                                        <option value ="AB+">AB+</option>
                                        <option value ="AB-">AB-</option>
                                        <option value ="O+">O+</option>
                                        <option value ="O-">O-</option>
                                    </select>
                            </div>
                        </div>
                        <center><button type="submit" name="fetch" class="btn btn-default btn-md" style="background-color:brown; color:white; width:20%;"><b>Submit</b></button></center>
                    </form>
                </div>
            </div>
        </body>
</html>
                  
