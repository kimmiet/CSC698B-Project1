<!DOCTYPE php>
<html>
<head>
	<?php
	session_start();
	?>

	<title> D3 BAC Calculator </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
  	@import url(http://fonts.googleapis.com/css?family=Antic+Slab);
  	html, body{
 	height:100%;
  	}
  	h1{
    font-family: "Antic Slab", serif;
    font-size:80px;
    color:#DDCCEE;
  	}
  	.lead{
    color:#DDCCEE;
  	}

  	/* Custom container */
  	.container-full {
  	margin: 0 auto;
    width: 100%;
    min-height:100%;
    background-color:#110022;
    color:#eee;
    overflow:hidden;
  	}

  	.container-full a {
   	color:#efefef;
    text-decoration:none;
  	}
  	.v-center {
    margin-top:7%;
  	}
		
	</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Latest compiled and minified CSS -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  <!-- jQuery library -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Latest compiled JavaScript -->
  	
  	<script id="ArrayScript" text="text/JavaScript">

  	BACArray = Array(  
  		[0.00 , 0.06 , 0.12 , 0.18 , 0.24 , 0.30], // 1. 100lbs MALE
  		[0.00 , 0.05 , 0.10 , 0.15 , 0.20 , 0.25], // 2. 120lbs MALE
  		[0.00 , 0.04 , 0.09 , 0.13 , 0.17 , 0.21], // 3. 140lbs MALE
  		[0.00 , 0.04 , 0.07 , 0.11 , 0.15 , 0.19], // 4. 160lbs MALE
  		[0.00 , 0.03 , 0.07 , 0.10 , 0.13 , 0.17], // 5. 180lbs MALE
  		[0.00 , 0.03 , 0.06 , 0.09 , 0.12 , 0.15], // 6. 200lbs MALE
  		[0.00 , 0.03 , 0.05 , 0.08 , 0.11 , 0.14], // 7. 220lbs MALE
  		[0.00 , 0.02 , 0.05 , 0.07 , 0.10 , 0.12], // 8. 240lbs MALE
  	 	[0.00 , 0.07 , 0.13 , 0.20 , 0.26 , 0.33], // 9. 100lbs FEMALE
  		[0.00 , 0.06 , 0.11 , 0.17 , 0.22 , 0.28], // 10. 120lbs FEMALE
  		[0.00 , 0.05 , 0.09 , 0.14 , 0.19 , 0.24], // 11. 140lbs FEMALE
  		[0.00 , 0.04 , 0.08 , 0.12 , 0.17 , 0.21], // 12. 160lbs FEMALE
  		[0.00 , 0.04 , 0.07 , 0.11 , 0.15 , 0.18], // 13. 180lbs FEMALE
  		[0.00 , 0.03 , 0.07 , 0.10 , 0.13 , 0.17], // 14. 200lbs FEMALE
  		[0.00 , 0.03 , 0.06 , 0.09 , 0.12 , 0.15], // 15. 220lbs FEMALE
  		[0.00 , 0.03 , 0.06 , 0.08 , 0.11 , 0.14]) // 16. 240lbs FEMALE
  		
  	
  </script>


  <script id="IndexSript" type="text/javascript">
  
  	
  	var DrinkCount = 1; // 5 indexes
  	var $Weight = $_REQUEST["Weight"]; // 16 indexes
  	var ArrayXIndex = DrinkCount;
  	var ArrayYIndex = $Weight;
  	var BACLevel = document.write(BACArray[ArrayXIndex][ArrayYIndex]);
  	var Interval = 
  	var ALDHCorrection = 0.01(Interval);

  	function ALDHBAC(){
  	}

  	</script>
	
</head>
<body>
	<?php 
	
 	$Gender = $_GET["Gender"];
 	$Weight = $_GET["Weight"];
 	
 	
	$_SESSION["Gender"] = $Gender;
	$_SESSION["Weight"] = $Weight;
	?>
	
	<script type="text/javascript">
		document.write(BACArray[ArrayXIndex][ArrayYIndex]);
	</script>
	
	<div class="container-full">
		<p id="BACMessage"> </p>
		<img src="BACChart.png" height="200px" width="auto">
	
	</div>
	
</body>
</html>
