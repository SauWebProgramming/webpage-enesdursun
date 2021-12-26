<div class="row padTopLeft">
	<?php		       
		$SorguY = mysqli_query($bag,'SELECT * FROM `yorumonay` order by id DESC');			
	?>
	<div class="col-md-10">  <!-- Yorumlar -->
	  <div class="panel panel-info">
          <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bullhorn"></span>
                        Yorumlar
                    </h3>
          </div>
              <div class="panel-body">
                    <ul class="media-list">
                        <?php 
						$i=0;
						while($yazY=mysqli_fetch_array($SorguY)):
						$i++;						
						if($i<5):
						?>
						<li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?php echo $yazY['isim']; ?>
                                </h4>
                                <p>
                                    <?php echo $yazY['yorum']; ?>
                                </p>
                            </div>
                        </li>
						<?php endif; ?>
						<?php endwhile; ?>	
                    </ul>
                    <a href="yorumlar.php" class="btn btn-info btn-block">Tum Yorumlar</a>                
			  </div>	
	  </div>
	
	</div>
	
</div>
