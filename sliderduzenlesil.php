<?php
	include 'head.php';
?>

<body>
    <?php	   
		$sorguSS = mysqli_query($bag,'SELECT * FROM `slider` order by id DESC');		
	?>
	
	<?php
		include 'header.php';
	?>

	<div class="row padtResim">
	  <div class="col-sm-6 col-md-4">
		<?php
			while($yazSS=mysqli_fetch_array($sorguSS)):				
		?>	
		<div class="thumbnail">
		  <img src="<?php echo $yazSS['resim'];?>">
		  <div class="caption">
			<h3><?php echo $yazSS['aciklama']; ?>
				<form method="post" action="slidersil.php">
					<button name="idS" value="<?php echo $yazSS['id']; ?>" type="submit" class="glyphicon glyphicon-trash">
				</form>	
				<form method="post" action="sliderduzenle.php">
					<button name="idD" value="<?php echo $yazSS['id']; ?>" type="submit" class="glyphicon glyphicon-edit"></button>
				</form>
			</h3>		
		  </div>
		</div>
		<?php endwhile ?>
	  </div>
	</div>

	<?php
		include 'footer.php';
	?>
</body>

</html>	