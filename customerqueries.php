<!DOCTYPE html>
<html>
<head>
    <title>Customer Query Form</title>
	<style>
	body {
    font-family: Arial, sans-serif;
    background-color: black;
    text-align: center;
}

form {
    width: 50%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h1 {
    color: #fff;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

textarea {
    height: 100px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

	</style>
</head>
<body>

<h1>Customer Query Details</h1>

<form action="customerqueries.php" method="post">
    Customer Name: <input type="text" name="CustomerName" required><br><br>
    Contact Info: <input type="text" name="ContactInfo" required><br><br>
    Query Date: <input type="date" name="QueryDate" required><br><br>
    Query Text: <textarea name="QueryText" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>
  <?php
/*$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "mobile_management";
*/
if(isset($_REQUEST["btnsubmit"]))
{
// Create connection
$con = mysqli_connect("localhost","root","","mobilemanagement");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$CustomerName = $_REQUEST['CustomerName'];
$ContactInfo = $_REQUEST['ContactInfo'];
$QueryDate = $_REQUEST['QueryDate'];
$QueryText = $_REQUEST['QueryText'];

$qry = "INSERT INTO CustomerQueries ( CustomerName, ContactInfo, QueryDate, QueryText) VALUES ( '$CustomerName', '$ContactInfo', '$QueryDate', '$QueryText')";

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
