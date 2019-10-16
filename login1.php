<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
</head>

<body>
<?php
include ('config.php');
session_start();

//if ($UserType=="Admin")
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$UserName=$_POST['username'];
$Password=$_POST['password'];
$UserType=$_POST['cmbUser'];

//$con=mysql_connect('localhost','root','');
//mysql_select_db("prisonpro", $con);
$sql = "SELECT * from admin_tbl where Admin_Name='".$UserName."' and Admin_Password='".$Password."'";
//$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
$result = mysqli_query($db,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($records>=1)
{
    session_register("UserName");
    $_SESSION['login_user'] = $UserName;
             
    header("location: admin/adminpanel.php");
//echo $records;
//echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
//header("location:admin/adminpanel.php");
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';


}
mysql_close($con);
}
else if($UserType=="Police")
{
$con=mysql_connect('localhost','root','');
mysql_select_db("prisonpro", $con);
$sql = "select * from policestation_tbl
 where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['Station_Id'];
$_SESSION['Name']=$row['Station_Name'];
header("location: officer/officerpanel.php");

}
mysql_close($con);
}
else
{
$con=mysql_connect('localhost','root','');
mysql_select_db("prisonpro", $con);
$sql = "select * from User_Tbl where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['User_Id'];
$_SESSION['Name']=$row['Name'];
header("location: user/userpanel.php");

}
mysql_close($con);
}

?>
</body>
</html>
