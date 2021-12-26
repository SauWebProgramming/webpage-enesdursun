<?php
	include 'head.php';
?>

<body>	
	<?php
	$YorumId=$_POST['idO'];	
	$ara=mysqli_query($bag,"SELECT * FROM `yorumlar` WHERE `id` = $YorumId");
	$aranan=mysqli_fetch_array($ara);
	$newIsim=$aranan['isim'];
	$newYorum=$aranan['yorum'];
	mysqli_query($bag,"INSERT INTO `yorumonay` (`id`, `isim`, `yorum`) VALUES (NULL, '$newIsim', '$newYorum')");
	mysqli_query($bag,"DELETE FROM `yorumlar` WHERE `yorumlar`.`id` = $YorumId");
	header("refresh:1; url=yorumonaysil.php");	
	?>
</body>

</html>	