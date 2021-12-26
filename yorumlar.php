  <?php
	include "head.php";
  ?>
  
  <body>
    <?php	   
		$sorguY = mysqli_query($bag,'SELECT * FROM `yorumonay` order by id DESC');		
	?>
  
	<?php
		include "header.php";
	?>

	<form style="padding-top:100px; padding-bottom:50px;" class="form-horizontal container" action="yorumekle.php" method="post">
	  <div class="form-group">
		<label for="isim" class="col-sm-2 control-label">Isım</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="isim" id="isim" value="" placeholder="">
		</div>
	  </div>
	  <div class="form-group">
		<label for="yorum" class="col-sm-2 control-label">Yorum</label>
		<div class="col-sm-10">
		  <textarea class="form-control" name="yorum" id="yorum" rows="3"></textarea>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Yorum Ekle</button>
		</div>
	  </div>
	</form>	
	
	<?php
	$i=0;
	while($yazY=mysqli_fetch_array($sorguY)):
	$i++;	
	?>
	
	<?php if($i==1): ?>
	  <div class="panel panel-default padtHaber">
		  <div class="panel-heading" id="haberbg">
			<h3 id="haberyazi"><?php echo $yazY['isim']; ?></h3>
		  </div>
		  <div class="panel-body">
			<?php echo $yazY['yorum']; ?>
		  </div>
	  </div>
	<?php endif ?>

	<?php if($i!=1): ?>	
	  <div class="panel panel-default">
		  <div class="panel-heading" id="haberbg">
			<h3 id="haberyazi"><?php echo $yazY['isim']; ?></h3>
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