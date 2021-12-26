<?php
	include 'head.php';
?>

<body>	
	<?php
		$newEmail=$_POST['email'];
		$newParola=$_POST['parola'];
		
	?>			
	<?php 
		mysqli_query($bag,"INSERT INTO `kullanicilar` (`id`, `email`, `sifre`, `yetki`) VALUES (NULL, '$newEmail', '$newParola', '0')");
		
		header("refresh:1; url=index.php");
	?>
</body>

</html>	