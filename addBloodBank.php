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

    // Process form data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $contact= $_POST['contact'];
        $address= $_POST['address'];
        

        // Insert data into the database
        $sql = "INSERT INTO `bloodbanks`(`name`, `Contact_no`, `address`) VALUES ('$name', '$contact', '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
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
        <style>
        body {
            background-color: white;
        }

        .panel {
                        width:85%;
                        margin-top : 15px;
                    }

        .p{
            text-align:center;
            margin-top : 25px;
        }

    </style>
    </head>
    <body>  
        <div class="row">
            <div class="col-md-6">
                <img src="images/bloodbank.jpg"  style="width:100%; height:550px;">
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:brown;">
                        <h1 style="text-align:center; color:white; font-weight: bold; background-color:brown;">Add New Blood Bank</h1>
                    </div>

                    <div class="panel-body">
                        <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name...." name="name">
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" class="form-control" id="contact" placeholder="Enter contact no...." name="contact">
                            </div>

                            <div class="form-group">
                                <label for="address">Blood Donation Awareness Camp City:</label>
                                <input type="textarea" class="form-control" id="address" rows="6" cols="100" placeholder="Enter address...." name="address">
                            </div>

                            <center><button type="submit" name="insert" class="btn btn-default btn-block" style="background-color:brown; color:white;"><b>Submit</b></button></center>
                        </form>
                        <!--p class="p">If you are not register doner then first register here...!
                        <p style="text-align:center;">for New Registeration <a href="#">Click here</h-->
                    </div>
                </div>
            </div>
        </div>  
          
    </body> 
</html>
