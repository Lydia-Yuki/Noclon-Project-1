<!DOCTYPE html>
<head>
  <title>CASE DETAILS  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<style>
    #data{
        align: center;
        background-color: white;
        border-collapse: collapse;
        width: 75%;
        margin-left:150px;
    }
    th{
        height: 50px;
        text-align: center;
        border-bottom: 1px solid black;
        background-color: skyblue;
    }
    td{
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table id='data' align='centre' border= "solid 1px #ddd">
<caption><h3>VISITOR'S DETAILS</h3></caption>
  <tr>
    <th>National ID</th>
    <th>Full Name</th>
    <th>Date of Visit</th>
    <th>Time In</th>
    <th>Time Out</th>
    <th>Relationship</th>
    <th>Phone Number</th>
    <th>Prisoner Name</th>
  </tr>
<?php
//$conn = mysqli_connect("localhost", "root", "", "");
// Check connection
include("../config.php");
session_start();

$sel= "SELECT * from visitortbl";
if ($result = mysqli_query($db, $sel))
{
    // echo "<table>";
while($rows = mysqli_fetch_assoc($result)) {  
    ?>   
    <tr>
        <td><?php echo $rows['national_id']?></td>
        <td><?php echo $rows['full_name']?></td>
        <td><?php echo $rows['visit_date']?></td>
        <td><?php echo $rows['timein']?></td>
        <td><?php echo $rows['timeout']?></td>
        <td><?php echo $rows['relationship']?></td>
        <td><?php echo $rows['number']?></td>
        <td><?php echo $rows['prisoner']?></td>
    </tr>
    <?php
}
// echo "</table>";
}

else { echo "0 results"; }
?>
</tr>
</table>
</body>
</html>