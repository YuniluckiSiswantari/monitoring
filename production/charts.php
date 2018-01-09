<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Perfomance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      canvas {
          width:100% !important;
          height:300px !important;
      }
      </style>
</head>
<body>

<div class="container">
  <center><h2>DASHBOARD PERFOMANCE</h2>  </center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer5" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer6" style="height: 300px; width: 100%;"></div>
      </div>
      <div class="item">
      <div id="chartContainer7" style="height: 300px; width: 100%;"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function() {
<?php include('Asset1.php'); ?>
// <?php include('Jambi.php'); ?>
// <?php include('Lirik.php'); ?>
// <?php include('P_susu.php'); ?>
// <?php include('Ramba.php'); ?>
// <?php include('Rantau.php'); ?>
// <?php include('Suban.php'); ?>
}
</script>
</body>
</html>
