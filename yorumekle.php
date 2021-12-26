<?php
	include 'head.php';
?>

<body>	
	<?php
		$newIsim=$_POST['isim'];
		$newYorum=$_POST['yorum'];
	?>			
	<?php 
		mysqli_query($bag,"INSERT INTO `yorumlar` (`id`, `isim`, `yorum`) VALUES (NULL, '$newIsim', '$newYorum')");
		
		header("refresh:1; url=yorumlar.php");
	?>
</body>

</html>	