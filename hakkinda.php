  <?php
	include "head.php";
  ?>
  
  <body>
    <?php	 
	$sorguH = mysqli_query($bag,'SELECT * FROM `hakkinda`');
	   
	$yaz1=mysqli_fetch_array($sorguH);
	?>
	  <?php
		include "header.php";
	  ?>	  
	  <div class="container padleftTH">
		    <h2><?php echo $yaz1['Hakkinda']; ?></h2>		  
			<h3><?php echo $yaz1['s1']; ?><br></h3>
			<h3><?php echo $yaz1['s2']; ?><br><h3>
			<h3><?php echo $yaz1['s3']; ?><br></h3>
			<h3><?php echo $yaz1['s4']; ?><br></h3>
			<h3><?php echo $yaz1['s5']; ?><br></h3>
			<h3><?php echo $yaz1['s6']; ?><br></h3>
			<h3><?php echo $yaz1['s7']; ?><br></h3>
			<h3><?php echo $yaz1['s8']; ?><br></h3>
	  </div>
	  
	  <?php
		include "footer.php"
	  ?>
  </body>
  
</html>  