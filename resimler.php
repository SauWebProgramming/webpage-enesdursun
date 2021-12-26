	<?php
		include 'head.php';
	?>

  <body>
    <?php	   
		$sorgu3 = mysqli_query($bag,'SELECT * FROM `resimler` order by id DESC');		
	?>
	
	<?php
		include 'header.php';
	?>

	<div class="row padtResim">
	  <div class="col-sm-6 col-md-4">
		<?php
			while($yaz3=mysqli_fetch_array($sorgu3)):				
		?>	
		<div class="thumbnail">
		  <img src="<?php echo $yaz3['resim'];?>">
		  <div class="caption">
			<h3><?php echo $yaz3['aciklama']; ?></h3>		
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

	