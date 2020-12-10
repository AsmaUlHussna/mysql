
<?php 
	session_start();
error_reporting(0);
	if (!$_SESSION['yes_login']) {
		 ?>
		 <div style="font-size: 50px;text-align: center;text-decoration: none; text-transform: uppercase; color: red;">
		 
		<?php die('Access Denied!');?>
		</div>
		<?php
	}
 ?>

<html>

<head>

  <title>Admin Dashboard</title>
  <link href="hStyle.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">



<div style="text-align: right;text-decoration: none; text-transform: uppercase;"><h3>Hello,  <?php echo $_SESSION['name']; ?> (<a href="adminlogout.php">Logout</a>)</h3></div>
	<div class="head01">Dashboard</div>
	
	<div ><a class="head02" href="adminviewall.php">View All Appointments</a></div> <br>
	<div  ><a class="head02" href="editappointment.php">Edit any Appointment</a></div>
	


</div>
</body>
</html>