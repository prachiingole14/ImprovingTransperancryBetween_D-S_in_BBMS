<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'blooddonation';


// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Blood Banks
$bloodbank_query = "SELECT * FROM bloodstock";
$bloodbank_result = $conn->query($bloodbank_query);

// Fetch Blood Groups
$bloodgroup_query = "SELECT * FROM bloodbank";
$bloodgroup_result = $conn->query($bloodgroup_query);

// Prepare data for JSON response
$data = [
    'bloodbanks' => $bloodbank_result->fetch_all(MYSQLI_ASSOC),
    'bloodgroups' => $bloodgroup_result->fetch_all(MYSQLI_ASSOC),
];

// Close connection
$conn->close();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
</head>
<body>
    <h2>Blood Bank Selection</h2>
    <form action="process.php" method="post">
        <label for="bloodbank">Select Blood Bank:</label>
        <select name="bloodbank" id="bloodbank">
            <!-- Options will be dynamically loaded from PHP -->
        </select>

        <label for="bloodgroup">Select Blood Group:</label>
        <select name="bloodgroup" id="bloodgroup">
            <!-- Options will be dynamically loaded from PHP -->
        </select>

        <button type="submit">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

<script>
    $(document).ready(function() {
    // Fetch data from PHP script
    $.ajax({
        url: 'fetch_data.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Populate Blood Bank dropdown
            var bloodbankDropdown = $('#bloodbank');
            $.each(data.bloodbanks, function(index, bloodbank) {
                bloodbankDropdown.append('<option value="' + bloodbank.id + '">' + bloodbank.name + '</option>');
            });

            // Populate Blood Group dropdown
            var bloodgroupDropdown = $('#bloodgroup');
            $.each(data.bloodgroups, function(index, bloodgroup) {
                bloodgroupDropdown.append('<option value="' + bloodgroup.id + '">' + bloodgroup.group_name + '</option>');
            });
        },
        error: function(error) {
            console.log('Error fetching data: ' + JSON.stringify(error));
        }
    });
});

</script>
