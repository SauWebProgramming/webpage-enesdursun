<?php
	include 'head.php';
?>

<body>
	<?php	
		$ResimId=$_POST['idS'];
		
		mysqli_query($bag,"DELETE FROM `slider` WHERE `slider`.`id` = $ResimId");
		header("refresh:1; url=sliderduzenlesil.php");
	?>			
</body>

</html>	