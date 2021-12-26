<?php
	include 'head.php';
?>

<body>
	<?php	
		$GezilecekYerId=$_POST['idS'];
		
		mysqli_query($bag,"DELETE FROM `gezilecekyerler` WHERE `gezilecekyerler`.`id` = $GezilecekYerId");
		header("refresh:1; url=gezilecekyerduzenlesil.php");
	?>		

	
</body>

</html>	