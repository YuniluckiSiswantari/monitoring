<?php
include("connect.php");

$sql = "SELECT * FROM prod_jambi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
} else {
    echo "0 results";
}

?>

var options2 = {
	animationEnabled: true,
	exportEnabled: true,
	title: {
		text: "Produksi Minyak dan Gas Jambi Oktober - November 2017"
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
$("#chartContainer2").CanvasJSChart(options2);

