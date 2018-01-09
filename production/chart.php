<?php
include("connect.php");

$sql = "SELECT * FROM prod_monitoring";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript">
window.onload = function() {

var options = {
	animationEnabled: true,
	exportEnabled: true,
	title: {
		text: "Produksi Minyak dan Gas Asset 1 Oktober - November 2017"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Target",
		includeZero: false,
		prefix: ""
	},
	data: [{
		type: "splineArea",
		color: "rgba(54,158,173,.7)",
      	xValueFormatString: "DD MMM",
		yValueFormatString: "##0.00",
		dataPoints: [
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <?php 
            $y = date("Y",strtotime($row['tanggal']));
            $m = date("m - 1",strtotime($row['tanggal']));
            $d = date("d",strtotime($row['tanggal']));
            ?>
			{ x: new Date (<?php echo $y.','.$m.','.$d; ?>), y: <?php echo $row['real_minyak']; ?> },
            <?php } ?>
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>