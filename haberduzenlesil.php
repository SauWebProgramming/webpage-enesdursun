	<?php
		include 'head.php';
	?>

  <body>
		<?php
			include 'header.php';
		?>

	<?php	   
		$sorgu2 = mysqli_query($bag,'SELECT * FROM `haberler` order by id DESC');		
	?>  	
	<?php
	$i=0;
	while($yaz2=mysqli_fetch_array($sorgu2)):
	$i++;	
	?>	
	<?php if($i==1): ?>	  
	  <div style="padding-top:90px;" class="panel panel-default form-group">
		  <div class="panel-heading" id="haberbg">
		    <h3 id="haberyazi"><?php echo $yaz2['Tarih']; ?></h3>
			<h3 id="haberyazi"><?php echo $yaz2['HaberAdi']; ?>
				<form method="post" action="habersil.php">
					<button name="idS" value="<?php echo $yaz2['id']; ?>" type="submit" class="glyphicon glyphicon-trash">
				</form>				
				<form method="post" action="haberduzenle.php">
					<button name="idD" value="<?php echo $yaz2['id']; ?>" type="submit" class="glyphicon glyphicon-edit"></button>
				</form>
			</h3>					
		  </div>
		  <div class="panel-body">
			<h4><?php echo $yaz2['HaberIcerik']; ?></h4>
		  </div>
	  </div>
	<?php endif ?>

	<?php if($i!=1): ?>	
	  
	  <div class="panel panel-default form-group">
		  <div class="panel-heading" id="haberbg">
		    <h3 id="haberyazi"><?php echo $yaz2['Tarih']; ?></h3>
			<h3 id="haberyazi"><?php echo $yaz2['HaberAdi']; ?>				
				<form method="post" action="habersil.php">
					<button name="idS" value="<?php echo $yaz2['id']; ?>" type="submit" class="glyphicon glyphicon-trash">
				</form>				
				<form method="post" action="haberduzenle.php">
					<button name="idD" value="<?php echo $yaz2['id']; ?>" type="submit" class="glyphicon glyphicon-edit"></button>
				</form>
			</h3>
		  </div>
		  <div class="panel-body">
			<h4><?php echo $yaz2['HaberIcerik']; ?></h4>
		  </div>
	  </div>
	  
	<?php endif	?>	
	<?php endwhile ?>		
	<?php
		include "footer.php"
	?>
		
		
  </body>
  
</html>	
	