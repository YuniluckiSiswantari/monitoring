<!DOCTYPE html>
<html>
<title>Dashboard Perfomance</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Dashboard Perfomance</h2>


  <center>
      
  <a href class="mySlides" src="Asset1.php" style="width:100%"></a> 
  <a href class="mySlides" src="Jambi.php" style="width:100%"></a> 
  <a href class="mySlides" src="Lirik.php" style="width:100%"></a>
  <a href class="mySlides" src="P_susu.php" style="width:100%"></a>
  <a href class="mySlides" src="Ramba.php" style="width:100%"></a>
  <a href class="mySlides" src="Rantau.php" style="width:100%"></a>
  <a href class="mySlides" src="Suban.php" style="width:100%"></a>
  <!-- <img class="mySlides" src="gas_jambi.png" style="width:100%"> -->
  <!-- <img class="mySlides" src="minyak_jambi.png" style="width:100%"> -->
  </center>
  

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 10000); 
}
</script>

</body>
</html>
