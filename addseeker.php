<?php
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
    $phone= $_POST['phone'];
    $blood_type= $_POST['blood_type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];

    // Insert data into the database
    $sql = "INSERT INTO `users`(`name`, `Contact_no`, `Blood_grp`, `email`, `password`, `age`, `weight`) VALUES ('$name', '$phone', '$blood_type', '$email', '$password', '$age', '$weight')";

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
<html>
<head>
    <title>Blood Donation Camp Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container{
             align: center; 
             margin-top: 10px;
             margin-bottom: 10px;
             width:60%;
        }

        .panel-heading{
             text-align: center; 
             color: white;
             background-color: Brown; 
             font-size: 40px; 
             font-weight: bold;
             margin-top: 10px;
             margin-bottom: 10px;
             width:85%;
        }

        .panel-body{
            width:85%
        }

        .btn{
            background-color:brown;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Add New Seeker</h1>
            </div>
                        
            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="blood_type">Blood Type:</label>
                        <select class="form-control" id="blood_type" name="blood_type" required>
                            <option value="">Select Blood Type</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class ="row">
                                <div class="col-md-6 form-group">
                                    <label for="age">Select Your Age Group:</label>
                                    <select name="age" id="age">
                                        <option value="age">Select Age Group</option>
                                        <option value="18-20">18-20</option>
                                        <option value="21-25">21-25</option>
                                        <option value="26-30">26-30</option>
                                        <option value="31-35">31-35</option>
                                        <option value="36-40">36-40</option>
                                        <option value="41-45">41-45</option>
                                        <option value="46-50">46-50</option>
                                        <option value="51-55">51-55</option>
                                        <option value="56-60">56-60</option>
                                        <option value="61-55">61-55</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="weight">Select Weight Group:</label>
                                    <select name="weight" id="weight">
                                        <option value="weight">Select Weight Group</option>
                                        <option value="46-50">46-50</option>
                                        <option value="51-55">51-55</option>
                                        <option value="56-60">56-60</option>
                                        <option value="61-65">61-65</option>
                                        <option value="66-70">66-70</option>
                                        <option value="71-75">71-75</option>
                                        <option value="76-80">76-80</option>
                                        <option value="81-85">81-85</option>
                                        <option value="86-90">86-90</option>
                                        <option value="91-95">91-95</option>
                                        <option value="96-100">96-100</option>
                                        <option value="100+">100+</option>
                                    </select>
                                </div>
                            </div>
                            
                    <center><button type="submit" class="btn btn-danger">Add New Seeker</button></center>
                </form>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        // Add JavaScript validation
        document.getElementById('registration-form').addEventListener('submit', function (event) {
            let name = document.getElementById('name').value;
            let phone = document.getElementById('phone').value;
            let bloodType = document.getElementById('blood_type').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if (name === '' || phone === '' || bloodType === '' || email === '' || password === '') {
                alert('Please fill out all fields.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>


