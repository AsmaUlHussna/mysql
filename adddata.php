<?php 
	session_start();


	
	if (!empty($_POST['submit2'])) {
		# code...
		include 'connection.php';
		$sql = "INSERT INTO workshop VALUES(null,'" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["address"] . "','" . $_POST["phone"] . "','" . $_POST["cln"] . "','" . $_POST["cen"] . "','" . $_POST["ad"] . "','" . $_POST["mechanic"] . "','" . $_POST["instructions"] . "')";
		// die($sql);
		//$sql = "INSERT INTO test VALUES(null,'" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["ad"] . "','" . $_POST["mechanic"] . "')";
		$result=$db->query($sql);

		
		if ($result) {
			echo "<script type='text/javascript'>alert('Thank You. Appointment Created Successfully!')</script>";
			echo '<script>window.location.href = "index.php";</script>';
		}else{
			echo "<script type='text/javascript'>alert('Error: Please try again.')</script>";
		}
	}
 ?>
 


<html>
<head>
<title>Create Appointment</title>
<link href="hStyle.css" rel="stylesheet" type="text/css">

</head>

<body>
   <div class="bgcentre">
	<div class="head01">Create New Appointment</div>
		<form action="" method="POST">
			 <input class="form01" type="text" name="name" value="" placeholder="Name:" required><br>
			 <input class="form01" type="email" name="email" value="" placeholder="Email:"required><br>
			 <input class="form01" type="text" name="address" value="" placeholder="Address:"required></textarea><br>
			 <input class="form01" type="text" name="phone" value=""placeholder="Phone:" required><br>
			 <input class="form01" type="text" name="cln" value="" placeholder="Car License Number:"required><br>
			 <input class="form01" type="text" name="cen" value="" placeholder="Car Engine Number:"required>
			 <div>Appointment Date</div>
			 <input class="form01" type="date" name="ad" value="" placeholder="Appointment Date:"required><br>
			 
			 <div>Mechanic List</div>
			  <select class="form01" name="mechanic" required>
				<option value="a" >A</option>
				<option value="b">B</option>
				<option value="c" >C</option>
				<option value="d">D</option>
				<option value="e">E</option>
			  </select><br>

	
			 <input class="form01" type="text" name="instructions" value="" placeholder="Any Instructions: (optional)"><br>
			
	<br>
			<input class="form02"type="submit" name="submit2" value="Submit"/></center> <br><br>
			
			<a class="head02" href="index.php">Search Existing Appointment</a>
			
			
			</div>
</body>


</html>