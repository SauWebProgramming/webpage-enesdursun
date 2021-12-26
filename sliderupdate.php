<?php
	include 'head.php';
?>

<body>	
	<?php
		$newResim=$_POST['resim'];
		$newAciklama=$_POST['aciklama'];
		$newId=$_POST['id'];
	?>			
		<?php 
		mysqli_query($bag,"UPDATE `slider` SET `resim` = '$newResim', `aciklama` = '$newAciklama' WHERE `slider`.`id` =  $newId");
		
		header("refresh:1; url=sliderduzenlesil.php");
	?>
</body>

</html>	