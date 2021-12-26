<?php
	include 'head.php';
?>

<body>	
	<?php
		$newResim=$_POST['resim'];
		$newAciklama=$_POST['aciklama'];
	?>			
		<?php 
		mysqli_query($bag,"INSERT INTO `resimler` (`id`, `resim`, `aciklama`) VALUES (NULL, '$newResim', '$newAciklama')");
		
		header("refresh:1; url=panel.php");
	?>
</body>

</html>	