<!DOCTYPE html>
<html>
<head>
<title>Login_Page</title>
<style>
body{
	background-color:#1D2634;
	color:white;
}

input[type="name"], input[type="number"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    box-sizing: border-box;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>
<form name ="loginpage" method="post" action="login.php">
<table border="0" cellspacing="0" cellpadding="10" align="center">
<tr>
<td>UserName:</td>
<td><input type="name" name="username" value="" placeholder="ENTER USERNAME" required></td>
</tr>
<tr>
<td>PassWord:</td>
<td><input type="number" name="password" placeholder="ENTER PASSWORD" required></td>
</tr>
<td colspan="2">
<center>
<input type="submit" name="btnsubmit" value="Submit">
</center>
</td>
</tr>
</table>
</form>
</body>
<?php



if (isset($_REQUEST["btnsubmit"])) {
    $conn = mysqli_connect("localhost", "root", "", "mobilemanagement");
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $qry = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_array($result);

    if ($row["password"] == $password) {
        session_start();
        $_SESSION["username"] = $username;
        header("location:adminside/index.php");
        exit();
    } else {
        header("location: login.php");
        exit();
    }
}
?>
</html>