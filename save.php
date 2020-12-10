<?php

	        Email: <input type="email" name="Email" value="" required><br><br>
			Password: <input type="Password" name="Pass" value="" required></textarea><br>

	$query = mysql_query("SELECT * FROM car_workshop ORDER BY id ASC") or die ("could not Search!!");
	$count = mysql_num_rows($query);
	
	if ($count == 0) {
		?>
		<div id = "result">
		   <?php echo "<a><i>No Appointment found</i></a>"; ?>
		</div>
		<?php
	}else {
		
		
		while($row = mysql_fetch_array($query)) {
			$appId = $row['id'];
			$name = $row['Name'];
			$address = $row['Address'];
			$phoneNum = $row['Phone'];
			$cln = $row['CarLicenseNumber'];
			$cen = $row['CarEngineNumber'];
			$mecha = $row['mechanic'];
			$doa = $row['adate'];
			
			?>
			
			<div id = "result">
			
			<a><b>Appointment Id:</b> </a> <?php echo "$appId<br />"; ?>
			<a><b>Name:</b> </a> <?php echo "$name<br />"; ?>
			<a><b>Address:</b> </a> <?php echo "$address<br />"; ?>
			<a><b>Contact:</b> </a> <?php echo "$phoneNum<br />"; ?>
			<a><b>Car License Number:</b> </a> <?php echo "$cln<br />"; ?>
			<a><b>Car Engine Number:</b> </a> <?php echo "$cen<br />"; ?>
			<a><b>Mechanic Nmae:</b> </a> <?php echo "$mecha<br />"; ?>
			<a><b>Date of Appointment:</b> </a> <?php echo "$doa<br />"; ?>
			<p><p/>
			
			</div>
			
			
			<?php
			
		}
		
	}
		
		?>
		
		
		
		
		
		
		
		<?php

    mysql_connect("localhost","root","") or die("Could Not Connect");
    mysql_select_db("cse391") or die ("Could Not Connect to DB");

    $query = mysql_query("SELECT * FROM car_workshop") or die ("could not Search!");
	$count = mysql_num_rows($query);
	
	echo $count;
	
	if ($count == 0) {
		
		   echo "<a><i>No Appointment found</i></a>";
		
	}
	else 
	{
		
		
		while($row = mysql_fetch_array($query)) {
			$appId = $row['id'];
			$name = $row['Name'];
			$address = $row['Address'];
			$phoneNum = $row['Phone'];
			$cln = $row['CarLicenseNumber'];
			$cen = $row['CarEngineNumber'];
			$mecha = $row['mechanic'];
			$doa = $row['adate'];
			
			echo "$appId<br />";
			echo "$name<br />";

		}
		
	}

?>


<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    /*** echo a message saying we have connected ***/
	
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
