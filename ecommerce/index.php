<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>NFC World</title>
	<meta name="description" content="La millor botiga de la xarxa.">
	<meta name="author" content="Grup TDIW-D10">

	<script src="resources/js/jquery-1.11.3.min.js"></script>

	<link type="text/css" href="resources/css/style.css" rel="stylesheet">
	<script src="resources/js/scripts.js"></script>
  
	<link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="resources/img/favicon.ico" type="image/x-icon">

	<script> 
	$(function(){
		$("#header").load("header.php"); 
		$("#footer").load("footer.html"); 
	});
	nextImageSlider();
	</script> 
</head>

<body>

<header id="header">
</header>

<section id="container">

	<div id="home_banner">
		<a id="slider_left" onclick="sliderLeft()"><</a>
		<a id="slider_right" onclick="sliderRight()">></a>
		<ul id="slider">
			<li><img id="image_banner_1" src="resources/img/banner1.png" width="100%" alt="" title="NFC" /></li>
		</ul>
	</div>

	<div id="products_grid">
		<p>Els nostres productes</p>
		<table>
			<tr>
				<td><a href="controller/producte_categoria_controller.php?id=1"><img src="resources/img/pulseres.png" alt="Pulseres" width="250px" height="250px"></a></td>
				<td><a href="controller/producte_categoria_controller.php?id=2"><img src="resources/img/rellotges.png" alt="Rellotges" width="250px" height="250px"></a></td>
			</tr>
			<tr>
				<td><a href="controller/producte_categoria_controller.php?id=3"><img src="resources/img/tags.png" alt="Tags" width="250px" height="250px"></a></td>
				<td><a href="view/tecnologia-nfc.html">Descobreix més sobre la tecnologia NFC</a></td>
			</tr>
		</table>
	</div>
</section>

<footer id="footer">
</footer>

</body>
</html>
