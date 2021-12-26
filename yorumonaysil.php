 <?php
	include "head.php";
  ?>
  
  <body>
	<?php	  		   
		$sorguY = mysqli_query($bag,'SELECT * FROM `yorumlar` order by id DESC');	   	
	?>
	
	<?php
		include "header.php";
	?>
	
	<?php
	$i=0;
	while($yazY=mysqli_fetch_array($sorguY)):
	$i++;	
	?>
	
	<?php if($i==1): ?>
	  <div class="panel panel-default padtHaber">
		  <div class="panel-heading">
			<h3><?php echo $yazY['isim']; ?>
				<form method="post" action="yorumonay.php">
					<button name="idO" value="<?php echo $yazY['id']; ?>" type="submit" class="glyphicon glyphicon-ok">
				</form>				
				<form method="post" action="yorumsil.php">
					<button name="idS" value="<?php echo $yazY['id']; ?>" type="submit" class="glyphicon glyphicon-remove"></button>
				</form></h3>
		  </div>
		  <div class="panel-body">
			<?php echo $yazY['yorum']; ?>
		  </div>
	  </div>
	<?php endif ?>

	<?php if($i!=1): ?>	
	  <div class="panel panel-default">
		  <div class="panel-heading">
			<h3><?php echo $yazY['isim']; ?>
				<form method="post" action="yorumonay.php">
					<button name="idO" value="<?php echo $yazY['id']; ?>" type="submit" class="glyphicon glyphicon-ok">
				</form>				
				<form method="post" action="yorumsil.php">
					<button name="idS" value="<?php echo $yazY['id']; ?>" type="submit" class="glyphicon glyphicon-remove"></button>
				</form>
			</h3>
		  </div>
		  <div class="panel-body">
			<?php echo $yazY['yorum']; ?>
		  </div>
	  </div>
	<?php endif	?>	
	<?php endwhile ?>		
	<?php
		include "footer.php"
	?>
  
  </body>
  
  
</html>  