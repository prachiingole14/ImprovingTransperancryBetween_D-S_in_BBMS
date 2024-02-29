<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Address Dropdown</title>
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="stateSelect">State:</label>
      <select class="form-control" id="stateSelect" onchange="populateCities()">
        <option value="california">California</option>
        <option value="newyork">New York</option>
        <!-- Add more states as needed -->
      </select>
    </div>

    <div class="form-group">
      <label for="citySelect">City:</label>
      <select class="form-control" id="citySelect">
        <!-- Cities will be populated dynamically based on the selected state -->
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  function populateCities() {
    var stateSelect = document.getElementById("stateSelect");
    var citySelect = document.getElementById("citySelect");

    // Clear existing options
    citySelect.innerHTML = "";

    // Add cities based on the selected state
    switch (stateSelect.value) {
      case "california":
        addCityOption("Los Angeles");
        addCityOption("San Francisco");
        break;
      case "newyork":
        addCityOption("New York City");
        addCityOption("Albany");
        break;
      // Add more cases for other states
    }
  }

  function addCityOption(cityName) {
    var citySelect = document.getElementById("citySelect");
    var option = document.createElement("option");
    option.text = cityName;
    citySelect.add(option);
  }
</script>

</body>
</html>
