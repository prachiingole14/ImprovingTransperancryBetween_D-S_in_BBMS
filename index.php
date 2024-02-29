<?php
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

    $query1 = mysqli_query($conn, "SELECT * FROM `users`");
    $query2 = mysqli_query($conn, "SELECT * FROM `donars`");

    while($result1 = mysqli_fetch_array($query1) || $result2 =mysqli_fetch_array($query2))
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Retrieve user input from the form
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Validate user credentials (This is a basic example and should be enhanced for security)
            if ($result1['email'] == $email && $result1['password'] == $password && $result2['email'] == $email && $result2['password'] == $password) {
                echo "Login successful!";
            } else {
                echo "Invalid email or password. Please try again.";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body{
                background-image:url("images/login.jpg");
                background-color:rgb(255,229,229);
                height:100%;
                width:100%;
                background-repeat: no-repeat;
            }

            .panel{
                width:50%;
                margin-left:500px;
                margin-top:90px;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title" style="text-align:center; color:Brown; font-size: 40px; font-weight: bold;"><center>Login Form</center></span>
                </div>
                <div class="panel-body">
                    <form id="signup-form" method="post" action="#">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <center><button type="submit" class="btn btn-danger"><a href="index1.php" style="color:white;">Login</button></a><br>
                        <p>If you are not register with us, then first create your profile. </p>
                        <p>to create new doner  <a href="newDoner.php">Click here...!</a>
                        to create new seeker  <a href="addseeker.php">Click here...!</a></p>
                        <!--p>to Add new Blood Bank  <a href="addBloodBank.php">Click here...!</a></p></center-->
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
