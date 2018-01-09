<html>
<head>
	<title>Add Data</title>
</head>
 
<body>
	<a href="index.php">Go to Monitoring</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Tanggal</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr> 
				<td>Target_Minyak</td>
				<td><input type="text" name="target_minyak"></td>
			</tr>
            <tr> 
				<td>Real_Minyak</td>
				<td><input type="text" name="real_minyak"></td>
			</tr>
            <tr> 
				<td>Target_Gas</td>
				<td><input type="text" name="target_gas"></td>
			</tr>
            <tr> 
				<td>Real_Gas</td>
				<td><input type="text" name="real_gas"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
        $target_minyak = $_POST['target_minyak'];
        $real_minyak = $_POST['real_minyak'];
        $target_gas = $_POST['target_gas'];
        $real_gas = $_POST['real_gas'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id,tanggal,target_minyak,real_minyak,target_gas,real_gas) VALUES('$id','$tanggal','$target_minyak','$real_minyak','$target_gas',
        '$real')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Monitoring</a>";
	}
	?>
</body>
</html>