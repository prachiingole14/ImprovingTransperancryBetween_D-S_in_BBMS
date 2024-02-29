<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .nav{
            background-color: Brown;
          }

      .active{
              background-color: Brown;
        }

      .modal-content{
              color:Brown;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse nav" style="background-color: Brown;">
      <div class="container-fluid" style="background-color: Brown;">
        <div class="navbar-header">
          <a class="navbar-brand" href="index1.php">E-RaktStrot</a>
        </div>

        <ul class="nav navbar-nav">
          <li class="active" ><a href="index1.php" style="background-color: Brown;">Home</a></li>

          <li><a href="about.php">About Us</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: Brown;">Event
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="BloodDonationCamp.php">Blood Donation Camp</a></li>
              <li><a href="AwarenessCamp.php">Blood Donation Awareness Camp</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: Brown;">Register Events
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Awareness_Camp_registration.php">Blood Donation Awareness Camp Registeration</a></li>
              <li><a href="blood_donation_camp_registration.php">Blood Donation Camp Registeration</a></li>
              <li><a href="addBloodBank.php">Add New Blood Bank</a></li>
              <li><a href="addbloodstock.php">Add Blood Stock</a></li>
            </ul>
          </li>

          <li><a href="services.php">Services</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="whoDonate.php">Who Can Donate Blood?</a></li>
          <li><a href="bloodstock.php">Blood Stock</a></li>
        </ul>
      </div>
    </nav>
  </body>
</html>