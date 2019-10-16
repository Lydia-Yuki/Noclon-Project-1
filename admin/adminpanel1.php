<!DOCTYPE html>
<head>
  <title>ZIMBABWE CORRECTIONAL SERVICES</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<!-- <style>
    #prisoner{
        text-align: left;
        font-size: 30pt;
        margin-top: -1200px;
    }
    #visitor{
        flex:left;
        
    }
</style> -->
<body bgcolor='lightgrey'>
	<table align='center' border='0' bgcolor='lightblue' width='500' cellpadding='10' cellspacing='0' height='0'>
          
		  <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
		  <tr>
            <td colspan="7" bgcolor="black" height="1" align="center">
		      <h1><font size="5">
	           <a href="adminpanel1.php">Home</a> | 
              			   
		        <a href="search-form.php">Search </a> |
                <!-- <a href="location.php">Location</a>| -->
				
		        <!-- <a href="officertransfer.php">Officer</a>| -->
		        <a href="registration.php">Register</a> |
                <a href="court.php">New Court Case</a> |
                <a href="transfer.php">Transfer Prisoner</a>
		        </font></h1>
            </td>
			 </td>
<!-- 		 
            <td height='1' colspan='3' align='right' bgcolor="white">&nbsp;</td> -->
			
          </tr>
		 
          <tr>
		 
            <td width='4%' bgcolor='#FFFFFF' valign='top'>
<h3 align='center'  title='You should be online'>&nbsp;</h3></td>

            <td width='81%' bgcolor="#FFFFFF">



<!-- <h3 align='center'>&nbsp;</h3> -->
<br/>

<a href ="addprisoner.php"><button type="button" id="prisoner" >Add New Prisoner</button></a>
      <a href ="addvisitor.php"><button type="button" id="visitor">Add New Visitor</button></a>
      <a href ="addofficer.php"><button type="button" id="officer">Add New Officer</button></a>
      <a href ="addprison.php"><button type="button" id="officer">Add New Prison Location</button></a>

		<br>
			</td>
            <td width='25%' bgcolor='white'  valign='top'>
			
	
<table border='1' align='center'>
<tr>
<td width="252" bgcolor="lightblue">
<h4>  Admin Management : </h4>


<ul>
	
	<li><a href='officertransfer.php'><b><button>Officer Transfer</button></b></a></li>
		<br>

	<li><a href='viewprisoners.php'><b><button>Prisoners Details</button></b></a></li>
		<br>
	<li><a href='viewcase.php'><b><button>Case Details</button></b></a></li>
		<br>
	<li><a href='viewtransfer.php'><b><button>Prisoner Transfer Info</button></b></a></li>
		<br>
	<li><a href='viewvis.php'><b><button>Visitors Information</button></b></a></li>
		<br>
	<li><a href='viewoff.php'><b><button>Officer details</button></b></a></li>
		<br>
	<li><a href='viewnewprison.php'><b><button>View Prisons</button></b></a></li>
		<br>
	<li><a href='viewAnnounce.php'><b><button>View Comment</button></b></a></li>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</head>
</html>