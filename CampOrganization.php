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
             width:80%;
        }

        .panel-body{
            width:80%
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
                <h1 class="panel-title">Add New Blood Donation Camp</h1>
            </div>
                        
            <div class="panel-body">
                <form id="registration-form">
                    <div class="form-group">
                        <label for="name">Organization Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Address:</label>
                        <input type="area" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Date:</label>
                        <input type="text" id="datepicker" class="form-control">
                    </div>
                    
                    <center><button type="submit" class="btn btn-danger">Add New Blood Donate Camp</button>
                            <a href="index1.php"><button type="submit" class="btn btn-danger">Back to Home</button></a>
                    </center>
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
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let bloodType = document.getElementById('blood-type').value;

            if (name === '' || email === '' || phone === '' || bloodType === '') {
                alert('Please fill out all fields.');
                event.preventDefault();
            }
        });

    </script>
</body>
</html>


