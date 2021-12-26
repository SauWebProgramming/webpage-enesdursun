<?php
	include 'head.php';
?>

<body>	
	<?php
		$newBaslik=$_POST['baslik'];
		$newTarih=$_POST['tarih'];
		$newIcerik=$_POST['icerik'];
	?>			
		<?php 
		mysqli_query($bag,"INSERT INTO `haberler` (`id`, `Tarih`, `HaberAdi`, `HaberIcerik`) VALUES (NULL, '$newTarih', '$newBaslik', '$newIcerik')");
		
		header("refresh:1; url=panel.php");
	?>
</body>

</html>	