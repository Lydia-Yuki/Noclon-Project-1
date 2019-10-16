<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admintbl WHERE admin_user = '$myusername' and admin_pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
         //session_register('myusername')
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin/adminpanel1.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:28px;
            margin-top:175px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:20px;
         }
         .box {
            font-size: 20px;
            border:#666666 solid 1px;
            width: 200px;
            height:50px;
            border:round;
         }
         #login{
            font-size: 26;
            border-radius: 5%;
            background-color: skyblue;
            text-align: center;
         }
      </style>
     
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px";  align = "left">
            <div style = "background-color:#87CEEB; border:soid 2px #000000; color:#000000; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input id='login' type = "submit" value = " Sign In "/><br />
               </form>
               
               <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>