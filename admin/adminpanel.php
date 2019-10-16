

<head>
  <title>ZIMBABWE CORRECTIONAL SERVICES</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='500' cellpadding='10' cellspacing='0' height='525'>
          
		  <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
		  <tr>
            <td colspan="7" bgcolor="#yellow" height="1" align="center">
		      <h1><font size="5">
	           <a href="adminpanel.php">Home</a> | 
              			   
		        <a href="search-form.php">Search </a> 
                <!-- <a href="location.php">Location</a>| -->
				
		        <a href="officertransfer.php">Officer</a>|
		        <a href="registration.php">Register</a>
				<a href="court.php">Court</a>
		        </font></h1>
            </td>
			 </td>
		 
            <td height='1' colspan='3' align='right' bgcolor="green">&nbsp;</td>
			
          </tr>
		 
          <tr>
		 
            <td width='4%' bgcolor='#FFFFFF' valign='top'>
<h3 align='center'  title='You should be online'>&nbsp;</h3></td>

            <td width='81%' valign='top' bgcolor="#FFFFFF">

<p align='center'>
 

<h3 align='center'>&nbsp;</h3>
<br/>
<h3 align='center'>THIS FOR ADMINSITRATOR </h3>
<P align='justify'><font face='Arial, Helvetica, sans-serif'>The system enable an Administrator 
	to provide services to users nd here the administrator can add and upload information,
	 update, delete, view the record added. The administrator
	  can also change his account for more security.</font></p>
	  <button type="button" class="btn btn-outline-success-lg">Success</button>

		<br>
			</td>
            <td width='25%' bgcolor='lightblue'  valign='top'>
			
	
<table border='1' align='center'>
<tr>
<td width="252" bgcolor="lightblue">
<h4>  Admin Management : </h4>


<ul>
	
	<li><a href='viewofficer.php'><b><button>Prison Officer Transfer</button></b></a></li>
		<br>

	<li><a href='viewprisoners.php'><b><button>Prisoners Detais</button></b></a></li>
		<br>
	<li><a href='viewcase.php'><b><button>Case Details</button></b></a></li>
		<br>
	<li><a href='viewtransfer.php'><b><button>Transfer Information</button></b></a></li>
		<br>
	<li><a href='viewvis.php'><b><button>Visitors Information</button></b></a></li>
		<br>
	<li><a href='viewoff.php'><b><button>Officer details</button></b></a></li>
		<br>
	<li><a href='viewnewprison.php'><b><button>New Prison</button></b></a></li>
		<br>
	<li><a href='viewcourt.php'><b><button>Court Information</button></b></a></li>
		<br>
	<li><a href='viewAnnounce.php'><b><button>View Comment</button></b></a></li>
		<br>
	<li><a href='report.php'><b><button>Report</button></b></a></li>
		<br>
    <li><a href='../index.php''><b><button>LOG OUT</button></b></a></li>
</ul>
</td>
</tr>
</table>


			
			</td>
          </tr>
          <tr>
            <?php
           include("Footer.php");
                ?>
          </tr>
	</table>
</body>
</head>
</html>