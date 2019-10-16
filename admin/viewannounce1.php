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
        width: 80%;
        margin-left:150px;
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
<caption><h3>COMMENTS/ANNOUNCEMENTS</h3></caption>
  <tr>
    <th>Recipient</th>
    <th>National ID</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  <tr>
  <?php
//$conn = mysqli_connect("localhost", "root", "", "");
// Check connection
include("../config.php");
session_start();

$sel= "SELECT * from announce";
if ($result = mysqli_query($db, $sel))
{
    // echo "<table>";
while($rows = mysqli_fetch_assoc($result)) {  
    ?>   
    <tr>
        <td><?php echo $rows['recipient']?></td>
        <td><?php echo $rows['national_id']?></td>
        <td><?php echo $rows['subject']?></td>
        <td><?php echo $rows['message']?></td>
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