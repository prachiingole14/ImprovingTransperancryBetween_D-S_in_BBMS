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

    if(isset($_POST['submit']))
    {
        $bb_name = $_POST['bb_name'];
        $address= $_POST['address'];
        $blood_grp = $_POST['blood_grp'];
        $unit = $_POST['unit'];
        

        // Insert data into the database
        $sql = "INSERT INTO `bloodstocks`(`bb_name`, `address`, `blood_grp`, `unit`) VALUES ('$bb_name', '$address', '$blood_grp', '$unit')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="panel panel-default" style="margin-left:260px; margin-right:260px; margin-top:60px;">
            <div class="panel-heading" style="background-color:brown;">
                <h1 style="text-align:center; color:white; font-weight: bold; background-color:brown;">Add New Blood Stock</h1>
            </div>

            <div class="panel-body">
                <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
                    <div class="form-group">
                        <label for="bb_name">Select Blood Bank Name:</label>
                            <select name="bb_name">
                                <option value ="Select Blood Bank Name">Select Blood Bank Name</option>
                               <?php
                                    $query = mysqli_query($conn, "SELECT * FROM `bloodbanks`");
                                    while($result = mysqli_fetch_array($query)){?>
                                        <option value = "<?php echo $result['name']; ?>"><?php echo $result['name']; ?></option>
                                   <?php }
                               ?>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Select Address:</label>
                            <select name="address">
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

                    <div class="form-group">
                        <label for="unit">Select Blood Unit in ml:</label>
                            <select name="unit">
                                <option value ="Select Blood Group">Select Blood Unit in ml</option>
                                <option value ="100-200">100-200</option>
                                <option value ="201-400">201-400</option>
                                <option value ="401-600">401-600</option>
                                <option value ="601-800">601-800</option>
                                <option value ="801-1000">801-1000</option>
                                <option value ="+1000">+1000</option>
                            </select>
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-default btn-lg" style="background-color:brown; color:white; width:50%;"><b>Submit</b></button></center>
                </form>
                <!--p class="p">If you are not register doner then first register here...!
                <p style="text-align:center;">for New Registeration <a href="#">Click here</h-->
            </div>
        </div>  
    </body>
</html>