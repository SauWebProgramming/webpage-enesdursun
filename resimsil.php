<?php
	include 'head.php';
?>

	<body>
		<?php	
			$ResimId=$_POST['idS'];
		
			mysqli_query($bag,"DELETE FROM `resimler` WHERE `resimler`.`id` = $ResimId");
			header("refresh:1; url=resimduzenlesil.php");
		?>			
	</body>
	
</html>	