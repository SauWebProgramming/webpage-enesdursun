<?php
	include 'head.php';	
?>

<body style="padding-top:100px; padding-left:50px;">
	<?php	
	$sorguG = mysqli_query($bag,'SELECT * FROM `kullanicilar`');
	$mail=$_POST['email'];
	$sifre=$_POST['parola'];
	?>  	
	<?php
		while($kullanici=mysqli_fetch_array($sorguG))
		{
			if(($mail==$kullanici['email'])&&($sifre==$kullanici['sifre']))
			{
				$_SESSION['email']=$mail;
				$_SESSION['password']=$sifre;
				$_SESSION['yetki']=$kullanici['yetki'];
				header("refresh:1; url=index.php");
			}
		}	
	?>	
</body>

</html>