<header id="Grenk" class="navbar navbar-inverse navbar-fixed-top">
	
	<?php	   
	$sorgu = mysqli_query($bag,'SELECT * FROM `ustmenu`');
	   
	$yaz=mysqli_fetch_array($sorgu);
	?>
	
  <div class="container-fluid container">
    <div class="navbar-header">     
	  <a class="navbar-brand" id="menuyazi" href="index.php"><?php echo $yaz['SayfaIsmi']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a id="menuyazi" href="hakkinda.php"><?php echo $yaz['Hakkinda']; ?></a></li>
      <li><a id="menuyazi" href="haberler.php"><?php echo $yaz['Haberler']; ?></a></li>
      <li><a id="menuyazi" href="resimler.php"><?php echo $yaz['Resimler']; ?></a></li>
	  <li><a id="menuyazi" href="gezilecekyerler.php"><?php echo $yaz['GezilecekYerler']; ?></a></li>
	  <li><a id="menuyazi" href="iletisim.php"><?php echo $yaz['Iletisim']; ?></a></li>
	  <?php
	  if(@$_SESSION['yetki']==100){
		  ?>
	  <li><a id="menuyazi" href="panel.php"><?php echo $yaz['Panel']; ?></a></li>
	  <?php
		}
	  ?>
    </ul>
	
	<ul class="nav navbar-nav  navbar-right padGirisUye">
       <?php
			if (isset($_SESSION["email"])){
	   ?>		
		<li>  <a style="padding-top:10px;" href="uyecikis.php"><button type="button" class="btn btn-success btn-sm">
	   <span class="glyphicon glyphicon-log-out"></span><?php echo $_SESSION["email"] ?></button></a> 
	   </li>
	   <?php
			}
			else{
		?>
				
	  <li>  	  
	  <a href="uyegiris.php" style="padding-top:10px;">
	   <button type="button" class="btn btn-primary btn-sm">
		 <span class="glyphicon glyphicon-user">			
			 <?php echo $yaz['Giris']; ?> 			
		 </span>
	   </button>
	  </a>		
	  </li>
	  
	  <li>	
	  <a href="uyekayit.php" style="padding-top:10px;">
	  <button type="button" class="btn btn-success btn-sm">
		<span class="glyphicon glyphicon-log-in">
			<?php echo $yaz['UyeOl']; ?>
		</span></button> 
		</a>
	  </li>
	  <?php
			}
	  ?>
	</ul>
	
  </div>
  
  
</header>