  <?php
	include "head.php";
  ?>
  
  <body>
	<?php	  		   
		$sorgu4 = mysqli_query($bag,'SELECT * FROM `gezilecekyerler`');	   	
	?>
	
	<?php
		include "header.php";
	?>
	
	<?php
	$i=0;
	while($yaz4=mysqli_fetch_array($sorgu4)):
	$i++;	
	?>
	
	<?php if($i==1): ?>
	  <div class="panel panel-default padtHaber">
		  <div class="panel-heading">
			<h3><?php echo $yaz4['GeziYeri']; ?></h3>
		  </div>
		  <div class="panel-body">
			<?php echo $yaz4['GeziAciklama']; ?>
		  </div>
	  </div>
	<?php endif ?>

	<?php if($i!=1): ?>	
	  <div class="panel panel-default">
		  <div class="panel-heading">
			<h3><?php echo $yaz4['GeziYeri']; ?></h3>
		  </div>
		  <div class="panel-body">
			<?php echo $yaz4['GeziAciklama']; ?>
		  </div>
	  </div>
	<?php endif	?>	
	<?php endwhile ?>		
	<?php
		include "footer.php"
	?>
  
  </body>
  
  
</html>  