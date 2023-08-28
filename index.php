<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.button-link {
      position: absolute;
      top: 10px;
      right: 10px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    /* Add a hover effect */
    .button-link:hover {
      background-color: #2980b9;
    }
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
	<a href="content.html" class="button-link">BACK</a>
		<center><h1>AIRTEL GEOLOCATION SITE</h1></center>
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtPkgvQbMSB1ysaZNuxo-RUgsZvepnf4&callback=loadMap">
</script>
</html>