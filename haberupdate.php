<?php
	include 'head.php';
?>

<body>	
	<?php
		$newBaslik=$_POST['baslik'];
		$newTarih=$_POST['tarih'];
		$newIcerik=$_POST['icerik'];
		$newId=$_POST['id'];
	?>			
		<?php 
		mysqli_query($bag,"UPDATE `haberler` SET `Tarih` = '$newTarih', `HaberAdi` = '$newBaslik', `HaberIcerik` = '$newIcerik' WHERE `haberler`.`id` =  $newId");
		
		header("refresh:1; url=haberduzenlesil.php");
	?>
</body>

</html>	