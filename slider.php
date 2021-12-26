    <?php	   
		$sorguSlider = mysqli_query($bag,'SELECT * FROM `slider` order by id');
		$sorguSlider2 = mysqli_query($bag,'SELECT * FROM `slider` order by id');		
	?>
<div class="container">
  <div id="myCarousel" class="carousel slide sliderMargTop" data-interval="3000" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
	<?php		
		$i=0;
		$y=0;
		while($yazSlider=mysqli_fetch_array($sorguSlider)):				
	?>
      <?php if($i==0):	?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php endif; 	?>
	  <?php if($i!=0):	?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
	  <?php endif;
		$i++;
	  ?>
	  <?php endwhile;	?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	<?php while($yazSlider2=mysqli_fetch_array($sorguSlider2)):
		$y++;
	?>
	<?php if($y==1):	?>	
      <div class="item active">
        <img class="fill" src="<?php echo $yazSlider2['resim']; ?>">
        <div class="carousel-caption">
          <h3><?php echo $yazSlider2['aciklama']; ?></h3>
        </div>
      </div>
	<?php endif;	?>  

	<?php if($y!=1):	?>	
      <div class="item">
        <img class="fill" src="<?php echo $yazSlider2['resim']; ?>">
        <div class="carousel-caption">
          <h3><?php echo $yazSlider2['aciklama']; ?></h3>
        </div>
      </div>
	<?php endif;	?>
	<?php endwhile; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>