


<html>

<head>

  <title>Appointment Details</title>
  <link href="hStyle.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="vvvhomejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">

	<div>
			        
					<form action = "dbsearch.php" method= "post" >
						<input class="form01" type="text" name="dbs" placeholder="Enter Your Email" id="searchBox" />
						<input class="form02"type="submit" value="Search" id="searchButton"/>
					</form>
					
    </div>




<?php

$user = 'root';
$pass = 'root';
$searchq = $_POST['dbs'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=cse391', $user, $pass);
	
    
	
	
	
    
	
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

		
		$result = $dbh->prepare("SELECT * FROM workshop WHERE email = '".$searchq ."'");
		
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





		


</div>
</body>
</html>