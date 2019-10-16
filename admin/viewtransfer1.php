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
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr>
<th>National id</th>
<th>File Number</th>
<th>From Prison</th>
<th>To Prison</th>
<th>Date of Transfer</th>
</tr>
<?php
include("../config.php");
session_start();

$sel= "SELECT * FROM prisontrans";
if ($result = mysqli_query($db, $sel))
{
    while($rows = mysqli_fetch_assoc($result)) {
        ?>   
        <tr>
            <td><?php echo $rows['national_id']?></td>
            <td><?php echo $rows['file_num']?></td>
            <td><?php echo $rows['from_prison']?></td>
            <td><?php echo $rows['to_prison']?></td>
            <td><?php echo $rows['transfer_date']?></td>
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