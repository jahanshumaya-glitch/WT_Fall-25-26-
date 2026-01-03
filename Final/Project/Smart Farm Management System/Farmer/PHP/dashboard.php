<!DOCTYPE html>
<html>
<head>
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <script>
        function showSeason(season) {
            var crops = document.getElementById("crops");
            if(season == "Spring") {
                crops.innerHTML = "Plant: Tomatoes, Lettuce, Carrots, Peas, Spinach<br>Start planting season<br>Prepare soil";
                crops.style.backgroundColor = "#c8e6c9";
            } else if(season == "Summer") {
                crops.innerHTML = "Grow: Corn, Peppers, Cucumbers, Melons, Beans<br>Water heavily<br>Harvest crops";
                crops.style.backgroundColor = "#fff9c4";
            } else if(season == "Fall") {
                crops.innerHTML = "Harvest: Pumpkins, Squash, Broccoli, Cauliflower, Kale<br>Prepare for winter<br>Plan next season";
                crops.style.backgroundColor = "#ffe0b2";
            }
        }
    </script>
</head>
<body>

<nav>
    <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="season.php">Season Update</a></li>
        <li><a href="../HTML/login.html">Logout</a></li>
    </ul>
</nav>

<h1>Welcome to Smart_Farming</h1>
<p>Farmer Dashboard</p>

<div class="box">
    <h2>Seasonal Crops</h2>
    <p>Click a season button to see which crops grow</p>

    <button onclick="showSeason('Spring')">Spring</button>
    <button onclick="showSeason('Summer')">Summer</button>
    <button onclick="showSeason('Fall')">Fall</button>

    <div id="crops" class="season-box">
        <!-- Crops info appears here -->
    </div>
</div>

</body>
</html>
