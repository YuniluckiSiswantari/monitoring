<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Monitoring</title>
</head>
 
<body>
<a href="add.php">Add Data</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th> <th>Tanggal</th> <th>Target_Minyak</th> <th>Real_Minyak</th> <th>Real_Gas</th> <th>Real_Gas</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['tanggal']."</td>";
        echo "<td>".$user_data['target_minyak']."</td>"; 
        echo "<td>".$user_data['real_minyak']."</td>"; 
        echo "<td>".$user_data['target_gas']."</td>"; 
        echo "<td>".$user_data['real_gas']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>