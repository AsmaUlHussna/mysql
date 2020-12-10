
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

  <title>View All</title>
  <link href="hStyle.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">



<div style="text-align: right;text-decoration: none; text-transform: uppercase;"><h4>Hello, <?php echo $_SESSION['name']; ?> (<a href="adminlogout.php">Logout</a>)</h4></div>
	<h1></h1>
	<div class="head01">All Appointments</div>
	
	
	



<?php

$user = 'root';
$pass = 'root';


try {
    $dbh = new PDO('mysql:host=localhost;dbname=cse391', $user, $pass);
	
    
	
	
	
    
	
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

		
		$result = $dbh->prepare("SELECT * FROM workshop ");
		
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<div class="record">
	    <?php
		$appId = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
		$phoneNum = $row['phone'];
		$cln = $row['cln'];
		$cen = $row['cen'];
		$adate = $row['ad'];
		$mecha = $row['mechanic'];
		$ins = $row['instructions'];
	    ?>
		
		<a><b>Appointment Id:</b> </a> <?php echo "$appId<br />"; ?>
			<a><b>Name:</b> </a> <?php echo "$name<br />"; ?>
			<a><b>Email:</b> </a> <?php echo "$email<br />"; ?>
			<a><b>Address:</b> </a> <?php echo "$address<br />"; ?>
			<a><b>Contact:</b> </a> <?php echo "$phoneNum<br />"; ?>
			<a><b>Car License Number:</b> </a> <?php echo "$cln<br />"; ?>
			<a><b>Car Engine Number:</b> </a> <?php echo "$cen<br />"; ?>
			<a><b>Appointment Date:</b> </a> <?php echo "$adate<br />"; ?>
			<a><b>Mechanic Name:</b> </a> <?php echo "$mecha<br />"; ?>
			<a><b>Instructions:</b> </a> <?php echo "$ins<br />"; ?>
			<p><p/>
		
	</div>
	

	
	
	
	<?php
		}
		
		$dbh = null;
	?>

	<br><br>
<div ><a class="head02" href="adminpage.php">Admin Home</a></div> <br>
	<div  ><a class="head02" href="editappointment.php">Edit any Appointment</a></div>

</div>
</body>
</html>