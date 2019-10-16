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
<caption><h3>PRISONER INFORMATION</h3></caption>
  <tr>
    <th>National ID</th>
    <th>Full Name</th>
    <th>D.O.B</th>
    <th>Date In</th>
    <th>Date Out</th>
    <th>Address</th>
    <th>Country of Origin</th>
    <th>Gender</th>
    <th>Marital Status</th>
    <th>Offence</th>
    <th>Sentence</th>
    <th>File Number</th>
    <th>Prison</th>
  </tr>
  <tr>
  <?php
//$conn = mysqli_connect("localhost", "root", "", "");
// Check connection
include("../config.php");
session_start();

$sel= "SELECT * from prisoners";
if ($result = mysqli_query($db, $sel))
{
    // echo "<table>";
while($rows = mysqli_fetch_assoc($result)) {  
    ?>   
    <tr>
        <td><?php echo $rows['national_id']?></td>
        <td><?php echo $rows['full_name']?></td>
        <td><?php echo $rows['DOB']?></td>
        <td><?php echo $rows['datein']?></td>
        <td><?php echo $rows['dateout']?></td>
        <td><?php echo $rows['address']?></td>
        <td><?php echo $rows['country']?></td>
        <td><?php echo $rows['gender']?></td>
        <td><?php echo $rows['marital_status']?></td>
        <td><?php echo $rows['offence']?></td>
        <td><?php echo $rows['sentence']?></td>
        <td><?php echo $rows['file_num']?></td>
        <td><?php echo $rows['prison']?></td>
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
