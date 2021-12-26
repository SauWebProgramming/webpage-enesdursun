<?php
	include 'head.php';
?>

<body>	
	<?php
		$newGeziYeri=$_POST['geziyeri'];
		$newAciklama=$_POST['aciklama'];
		$newId=$_POST['id'];
	?>			
		<?php 
		mysqli_query($bag,"UPDATE `gezilecekyerler` SET `GeziYeri` = '$newGeziYeri', `GeziAciklama` = '$newAciklama' WHERE `gezilecekyerler`.`id` = $newId");		
		header("refresh:1; url=gezilecekyerduzenlesil.php");
	?>
</body>

</html>	