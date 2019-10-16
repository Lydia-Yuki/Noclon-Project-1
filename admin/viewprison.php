<!DOCTYPE html>
<head>
  <title>PRIOSONER DETAILS  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<style>
    #data{
        align: center;
        background-color: white;
        border-collapse: collapse;
        width: 100%;
        /* margin-left:20px; */
    }
    th{
        height: 50px;
        text-align: center;
        border-bottom: 1px solid black;
        background-color: skyblue;
    }
    td{
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
<table id='data' align='centre' border= "solid 1px #ddd">
<caption><h3>PRISON DETAILS</h3></caption>
  <tr>
    <th>Prison Number</th>
    <th>Prison Name</th>
    <th>Location</th>
    <th>Date of Establishment</th>
    <th>Officer in Charge</th>
    <th>Contact Number</th>
    <th>Capacity</th>
  </tr>
  <tr>
  <?php
//$conn = mysqli_connect("localhost", "root", "", "");
// Check connection
include("../config.php");
session_start();

$sel= "SELECT * from prisontbl";
if ($result = mysqli_query($db, $sel))
{
    // echo "<table>";
while($rows = mysqli_fetch_assoc($result)) {  
    ?>   
    <tr>
        <td><?php echo $rows['pno']?></td>
        <td><?php echo $rows['pname']?></td>
        <td><?php echo $rows['location']?></td>
        <td><?php echo $rows['opendate']?></td>
        <td><?php echo $rows['in_charge']?></td>
        <td><?php echo $rows['contact']?></td>
        <td><?php echo $rows['capacity']?></td>
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
</head>
</html>