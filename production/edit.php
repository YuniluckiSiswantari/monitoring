<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$tanggal=$_POST['tanggal'];
	$target_minyak=$_POST['target_minyak'];
    $real_minyak=$_POST['real_minyak'];
    $target_gas=$_POST['target_gas'];
    $real_gas=$_POST['real_gas'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET tanggal='$tanggal',target_minyak='$target_minyak',real_gas='$real_gas',target_gas='$target_gas',real_gas='$real_gas' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$tanggal = $user_data['tanggal'];
    $target_minyak = $user_data['target_minyak'];
    $real_minyak = $user_data['real_minyak'];
    $target_gas = $user_data['target_gas'];
    $real_gas = $user_data['real_gas'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr> 
				<td>Tanggal</td>
				<td><input type="text" name="tanggal" value=<?php echo $tanggal;?>></td>
			</tr>
			<tr> 
				<td>Target_Minyak</td>
				<td><input type="text" name="target_minyak" value=<?php echo $target_minyak;?>></td>
			</tr>
            <tr> 
				<td>Real_Minyak</td>
				<td><input type="text" name="real_minyak" value=<?php echo $real_minyak;?>></td>
			</tr>
            <tr> 
				<td>Target_Gas</td>
				<td><input type="text" name="target_gas" value=<?php echo $target_gas;?>></td>
			</tr>
            <tr> 
				<td>Real_Gas</td>
				<td><input type="text" name="real_gas" value=<?php echo $real_gas;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>