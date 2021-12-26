	<?php
		include 'head.php';
	?>

<body>	
	<?php
	$sorguG = mysqli_query($bag,'SELECT * FROM `kullanicilar`');
	?>  	
	<?php
		include 'header.php';
	?>
	
<div class="row padtGiris">
	<div class="col-md-6"> 
<br><br>
<form class="form-horizontal" action="uyegiriskontrol.php" method="post">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
  </div>
  <div class="form-group">
    <label for="parola" class="col-sm-2 control-label">Parola</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="parola" id="parola" placeholder="Parola">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">GİRİŞ</button>
    </div>
  </div>
</form>

</div>
</div>

<?php
	include 'footer.php';
?>

</body>	