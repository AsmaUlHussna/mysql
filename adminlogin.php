


<html>

<head>

  <title>Admin Login</title>
  <link href="hStyle.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="homejs.js"></script> 
  
  
 </head>

<body>
<div class="bgcentre">



<?php 
	session_start();


	
	if (!empty($_POST['submit'])) {
		
		include 'connection.php';
		$sql = "SELECT * FROM admin WHERE username='" . $_POST["un"] ."' and password = '". $_POST["pw"] . "'";
		$result=$db->query($sql);

		
		if ($row= $result->fetch_assoc()) {
			$_SESSION['yes_login'] = true;
			
			//$adminName = $db->prepare("SELECT name FROM admin WHERE username = '". $_POST["un"] ."'");
			$_SESSION['name'] = $_POST[un];
			header('Location: adminpage.php');
			die('passed :)');
		}else{
			//echo 'Incorrect Username or Password';
			 ?>
			
			<script>
			 
			  alert("Incorrect Username or Password");
			
			</script>
		<?php 	
		}
	}else{
		
	}
 ?>

	<div class="head01">Admin Login</div> <br>
	<form action="" method="POST">
		<input class="form01"type="text" name="un" placeholder="Username" required /><br>
		<input class="form01"type="password" name="pw" placeholder="Password" required /><br>
		<input class="form02" type="submit" name="submit"/>
		
		
	</form>
	
	<br><br>
	<a class="head02" href="index.php">Home</a>
	


</div>
</body>
</html>