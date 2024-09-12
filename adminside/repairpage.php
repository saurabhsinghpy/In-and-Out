<!DOCTYPE html>
<html>
<head>
    <title>Repair Job Details</title>
</head>
<style>
  /* styles.css */

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

/* Header styles */
h1 {
    text-align: center;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    table-layout: fixed; /* Fixed table layout to manage cell widths */
}

table, th, td {
    border: 1px solid #ddd;
    white-space: nowrap; /* Prevent text from wrapping in cells */
    overflow: hidden;
    text-overflow: ellipsis; /* Display ellipsis for overflowing text */
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #333;
    color: #fff;
}

</style>
<body>
    <h1>Repair Job Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Variant</th>
            <th>Problem</th>
            <th>Receival Time</th>
            <th>Expected Delivery Time</th>
            <th>Screen Condition</th>
            <th>Camera Condition</th>
            <th>Body Condition</th>
            <th>Battery Condition</th>
            <th>Mic Condition</th>
            <th>Aux Condition</th>
            <th>Charging Port</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","mobilemanagement");
        
        $qry="SELECT * FROM mobilerepair";
        
        $result=mysqli_query($conn,$qry);
        
        while($row=mysqli_fetch_array($result))
        {
          echo "
          <tr>
            <td>".$row["id"]."</td>
            <td>".$row["model"]."</td>
            <td>".$row["variant"]."</td>
            <td>".$row["problem"]."</td>
            <td>".$row["time_of_receival"]."</td>
            <td>".$row["time_of_delivery"]."</td>
            <td>".$row["screen_condition"]."</td>
            <td>".$row["camera_condition"]."</td>
            <td>".$row["body_condition"]."</td>
            <td>".$row["battery_condition"]."</td>
            <td>".$row["mic_condition"]."</td>
            <td>".$row["aux_condition"]."</td>
            <td>".$row["charging_port"]."</td>
        </tr>
        ";
        }
        
        ?>
        </table>
</body>
</html>