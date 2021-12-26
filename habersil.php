<?php
	include 'head.php';
?>

<body>
	<?php	
		$HaberId=$_POST['idS'];
		
		mysqli_query($bag,"DELETE FROM `haberler` WHERE `haberler`.`id` = $HaberId");
		header("refresh:1; url=haberduzenlesil.php");
	?>		

	
</body>

</html>	