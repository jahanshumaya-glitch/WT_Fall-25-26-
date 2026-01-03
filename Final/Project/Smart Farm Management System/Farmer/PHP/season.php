<!DOCTYPE html>
<html>
<head>
    <title>Season Update</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="season.php">Season Update</a></li>
        <li><a href="../HTML/login.html">Logout</a></li>
    </ul>
</nav>

<h1>Season Update</h1>

<?php
$month = date("n");

if ($month >= 1 && $month <= 4) {
    echo "<div class='season-box' style='background-color:#c8e6c9'>Spring: Plant Tomatoes, Lettuce, Carrots, Peas, Spinach</div>";
} elseif ($month >= 5 && $month <= 8) {
    echo "<div class='season-box' style='background-color:#fff9c4'>Summer: Grow Corn, Peppers, Cucumbers, Melons, Beans</div>";
} else {
    echo "<div class='season-box' style='background-color:#ffe0b2'>Fall: Harvest Pumpkins, Squash, Broccoli, Cauliflower, Kale</div>";
}
?>

</body>
</html>
