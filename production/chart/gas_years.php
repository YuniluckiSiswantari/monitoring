<html>
	<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Perfomance MMCF GAS(years)'
         },
         xAxis: {
            categories: ['jumlah']
         },
         yAxis: {
            title: {
               text: 'tahun'
            }
         },
              series:             
            [
            <?php 
        	include('config.php');
           $sql   = "SELECT jumlah FROM gas_years";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$jumlah=$ret['jumlah'];                     
                 $sql_jumlah   = "SELECT jumlah FROM gas_years WHERE jumlah='$jumlah'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $jumlah; ?>',
                      data: [<?php echo $tahun; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	<body>
		<div id='container'></div>		
	</body>
</html>