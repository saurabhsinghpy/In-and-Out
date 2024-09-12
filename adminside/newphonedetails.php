<!DOCTYPE html>
<html>
<head>
    <title>New Phone Details Form</title>
	<style>
	body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #263043;
}

h2 {
    text-align: center;
}

form {
    max-width: 600px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.center {
    text-align: center;
}

	</style>
</head>
<body>

<h2>New Phone Details Form</h2>

<form action="newphonedetails.php" method="post">

    <label for="brand">Brand:</label>
    <input type="text" id="brand" name="brand" required><br><br>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br><br>

    <label for="release_date">Release Date:</label>
    <input type="date" id="release_date" name="release_date" required><br><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price" required><br><br>

    <label for="screen_size">Screen Size (in inches):</label>
    <input type="text" id="screen_size" name="screen_size" required><br><br>

    <label for="camera_resolution">Camera Resolution (in MP):</label>
    <input type="text" id="camera_resolution" name="camera_resolution" required><br><br>

    <label for="storage_capacity">Storage Capacity (in GB):</label>
    <input type="text" id="storage_capacity" name="storage_capacity" required><br><br>

    <label for="operating_system">Operating System:</label>
    <input type="text" id="operating_system" name="operating_system" required><br><br>

    <label for="battery_capacity">Battery Capacity (in mAh):</label>
    <input type="text" id="battery_capacity" name="battery_capacity" required><br><br>

    <label for="connectivity">Connectivity:</label>
    <input type="text" id="connectivity" name="connectivity" required><br><br>

    <label for="features">Features:</label><br>
    <textarea id="features" name="features" rows="4" cols="50" required></textarea><br><br>

    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" required><br><br>

    <input type="submit" name="btnsubmit" value="Add">
</form>
<?php
/*
$servername = "localhost";
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "mobile_management";
*/

if(isset($_REQUEST["btnsubmit"]))
{
$con = mysqli_connect("localhost","root","","mobilemanagement");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$brand = $_REQUEST['brand'];
$model = $_REQUEST['model'];
$release_date = $_REQUEST['release_date'];
$price = $_REQUEST['price'];
$screen_size = $_REQUEST['screen_size'];
$camera_resolution = $_REQUEST['camera_resolution'];
$storage_capacity = $_REQUEST['storage_capacity'];
$operating_system = $_REQUEST['operating_system'];
$battery_capacity = $_REQUEST['battery_capacity'];
$connectivity = $_REQUEST['connectivity'];
$features = $_REQUEST['features'];
$image_url = $_REQUEST['image_url'];

$qry = "INSERT INTO NewPhoneDetails (brand, model, release_date, price, screen_size, camera_resolution, storage_capacity, operating_system, battery_capacity, connectivity, features, image_url)
VALUES ('$brand', '$model', '$release_date', '$price', '$screen_size', '$camera_resolution', '$storage_capacity', '$operating_system', '$battery_capacity', '$connectivity', '$features', '$image_url')";

if(mysqli_query($con,$qry))
	{
		echo"<center><h2>Saved Successfully</h2></center>";
	}
	else
	{
		echo"<center><h2>Error cant save the record</h2></center>";
	}
}
?>

</body>
</html>
