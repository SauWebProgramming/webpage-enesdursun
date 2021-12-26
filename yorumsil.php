<?php
	include 'head.php';
?>

<body>	
	<?php
	$YorumId=$_POST['idS'];	
	$ara=mysqli_query($bag,"SELECT * FROM `yorumlar` WHERE `id` = $YorumId");
	mysqli_query($bag,"DELETE FROM `yorumlar` WHERE `yorumlar`.`id` = $YorumId");
	header("refresh:1; url=yorumonaysil.php");	
	?>
</body>

</html>	