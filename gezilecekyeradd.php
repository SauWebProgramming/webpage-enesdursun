<?php
	include 'head.php';
?>

<body>	
	<?php
		$newGezilecekYer=$_POST['gezilecekyer'];
		$newAciklama=$_POST['aciklama'];
	?>			
		<?php 
		mysqli_query($bag,"INSERT INTO `gezilecekyerler` (`id`, `GeziYeri`, `GeziAciklama`) VALUES (NULL, '$newGezilecekYer', '$newAciklama');");
		
		header("refresh:1; url=panel.php");
	?>
</body>

</html>	