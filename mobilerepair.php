<!DOCTYPE html>
<html>
<head>
    <title>Mobile Repair Form</title>
	<style>
        body {
            background-color: #29393D;
            color: white; /* Set text color to white for better visibility */
        }
		h2{
			text-align:center;
		}
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Slightly transparent black background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #fff;
        }

</style>

</head>
<body>

<h2>Mobile Repair Form</h2>

<form action="mobilerepair.php" method="get">

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br><br>

    <label for="variant">Variant:</label>
    <input type="text" id="variant" name="variant" required><br><br>

    <label for="problem">Problem:</label><br>
    <textarea id="problem" name="problem" rows="4" cols="50" required></textarea><br><br>

    <label for="time_of_receival">Time of Receival:</label>
    <input type="datetime-local" id="time_of_receival" name="time_of_receival" required><br><br>

    <label for="time_of_delivery">Time of Delivery:</label>
    <input type="datetime-local" id="time_of_delivery" name="time_of_delivery" required><br><br>

    <label for="screen_condition">Screen Condition:</label>
    <input type="text" id="screen_condition" name="screen_condition" required><br><br>

    <label for="camera_condition">Camera Condition:</label>
    <input type="text" id="camera_condition" name="camera_condition" required><br><br>

    <label for="body_condition">Body Condition:</label>
    <input type="text" id="body_condition" name="body_condition" required><br><br>

    <label for="battery_condition">Battery Condition:</label>
    <input type="text" id="battery_condition" name="battery_condition" required><br><br>

    <label for="mic_condition">Mic Condition:</label>
    <input type="text" id="mic_condition" name="mic_condition" required><br><br>

    <label for="aux_condition">AUX Condition:</label>
    <input type="text" id="aux_condition" name="aux_condition" required><br><br>

    <label for="charging_port">Charging Port:</label>
    <input type="text" id="charging_port" name="charging_port" required><br><br>

    <input type="submit" name="btnsubmit" value="Submit">
</form>
<?php
/*
$servername = "localhost";
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "mobile_management";
*/
if(isset($_REQUEST["btnsubmit"]))
// Create connection
{
$con = mysqli_connect("localhost","root","","mobilemanagement");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$model = $_REQUEST['model'];
$variant = $_REQUEST['variant'];
$problem = $_REQUEST['problem'];
$time_of_receival = $_REQUEST['time_of_receival'];
$time_of_delivery = $_REQUEST['time_of_delivery'];
$screen_condition = $_REQUEST['screen_condition'];
$camera_condition = $_REQUEST['camera_condition'];
$body_condition = $_REQUEST['body_condition'];
$battery_condition = $_REQUEST['battery_condition'];
$mic_condition = $_REQUEST['mic_condition'];
$aux_condition = $_REQUEST['aux_condition'];
$charging_port = $_REQUEST['charging_port'];

$qry = "INSERT INTO MobileRepair (model, variant, problem, time_of_receival, time_of_delivery, screen_condition, camera_condition, body_condition, battery_condition, mic_condition, aux_condition, charging_port)
VALUES ('$model', '$variant', '$problem', '$time_of_receival', '$time_of_delivery', '$screen_condition', '$camera_condition', '$body_condition', '$battery_condition', '$mic_condition', '$aux_condition', '$charging_port')";

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
