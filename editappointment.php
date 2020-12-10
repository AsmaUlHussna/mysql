
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
 
 <?php 
	

        
	
	if (!empty($_POST['submit2'])) {
		# code...
		include 'connection.php';
		
		$uid = $_POST['aid'];
		$appointmentdate = $_POST['appdate'];
		$changemechanic =  $_POST['mechanicup'];
		
		if ($appointmentdate ==NULL && $changemechanic==NULL) {
			echo "<script type='text/javascript'>alert('No input given. Try Again')</script>";
		} 
		else if ($appointmentdate !=NULL && $changemechanic==NULL) {
			$sql = "UPDATE workshop ". "SET ad = '".$_POST['appdate']."' ". "WHERE id = $uid" ;
			$result=$db->query($sql);
			
			if ($result) {
			echo "<script type='text/javascript'>alert('Appointment Date Updated Successfully!')</script>";
			echo '<script>window.location.href = "adminviewall.php";</script>';
			}else{
				echo "<script type='text/javascript'>alert('Error: Please try again.')</script>";
			}
			
		} 
		else if ($appointmentdate ==NULL && $changemechanic!=NULL) {
			$sql = "UPDATE workshop ". "SET mechanic = '".$_POST['mechanicup']."' ". "WHERE id = $uid" ;
			$result=$db->query($sql);
			
			if ($result) {
			echo "<script type='text/javascript'>alert('Mechanic changed Successfully!')</script>";
			echo '<script>window.location.href = "adminviewall.php";</script>';
			}else{
				echo "<script type='text/javascript'>alert('Error: Please try again.')</script>";
			}
			
		} 
		else if ($appointmentdate !=NULL && $changemechanic!=NULL) {
			
			$sql = "UPDATE workshop ". "SET mechanic = '".$_POST['mechanicup']."' ". "WHERE id = $uid" ;
			$sql2 = "UPDATE workshop ". "SET ad = '".$_POST['appdate']."' ". "WHERE id = $uid" ;
			$result=$db->query($sql);
			$result2=$db->query($sql2);
			if ($result) {
			echo "<script type='text/javascript'>alert('Appointment Date Updated & Mechanic Changed Successfully!')</script>";
			echo '<script>window.location.href = "adminviewall.php";</script>';
			}else{
				echo "<script type='text/javascript'>alert('Error: Please try again.')</script>";
			}
			
		} 
		
		
	}
 ?>
 
 

<html>

<head>

  <title>Edit Appointment</title>
  <link href="hStyle.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">



<div style="text-align: right;text-decoration: none; text-transform: uppercase;"><h4>Hello, <?php echo $_SESSION['name']; ?> (<a href="adminlogout.php">Logout</a>)</h4></div>
	<h1></h1>
	<div class="head01">Edit Appointment</div>
	
	
	




	
<form action="" method="POST">
			 
			 <div>Appointment ID</div>
			 <input class="form01" type="number" name="aid" value="" placeholder="Appointment ID:" required><br>
			 <div>Update Appointment Date</div>
			 <input class="form01" type="date" name="appdate" value="" placeholder="Appointment Date:"><br>
			 
			 <div>Change Mechanic</div>
			  <select class="form01" name="mechanicup" >
			  <option value="" >List</option>
				<option value="a" >A</option>
				<option value="b">B</option>
				<option value="c" >C</option>
				<option value="d">D</option>
				<option value="e">E</option>
			  </select><br>
	
			<input class="form02"type="submit" name="submit2" value="Submit"/></center> <br><br>
	
	
	


	<br><br>
<div ><a class="head02" href="adminpage.php">Admin Home</a></div> <br>
	<div  ><a class="head02" href="adminviewall.php">View All Appointments</a></div>

</div>
</body>
</html>