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
		mysqli_query($bag,"UPDATE `resimler` SET `resim` = '$newResim', `aciklama` = '$newAciklama' WHERE `resimler`.`id` =  $newId");
		
		header("refresh:1; url=resimduzenlesil.php");
	?>
</body>

</html>	