<html>
<head>
	<link rel="stylesheet" href="style.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>Covid Tracker India</title>
</head>
<body>

	<?php include 'tracker.php'; ?>
	<div class = "heading">
		<form method='POST'>
		<select id="state" name ="state" class="dropdown">	
		<option value = "Total">India</option>
		<?php
			for($i=1;$i<$statecount-1;$i++)
			echo "<option value = \"".$coronalive['statewise'][$i]['state'] ."\">". $coronalive['statewise'][$i]['state'] . "</option>";
		?>	
		</select>
		<select id="type" name ="type" class="dropdown">
			<option value="active">Active</option>
			<option value="confirmed">Confirmed</option>
			<option value="recovered">Recovered</option>
			<option value="deaths">Deaths</option>
	
		</select>
		 <input type="submit" class="select-button" value="select">
		</form>
	</div>
	<div class = "content">		
		<div class ="number-content">
		<?php	
			$name = isset($_POST['state']) ? $_POST['state'] : 'Total'; 
			$type = isset($_POST['type']) ? $_POST['type'] : 'active'; 
			//$name = $_POST['state'];
			activeCases($name,$type);
		?>
		<div class ="text-content">
		<?php
			printMessage($name,$type);
		?>
		</div>
		</div>
	</div>
</body>
</html>
