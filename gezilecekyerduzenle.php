<?php
	include 'head.php';
?>

<body>
	<?php
		include 'header.php';
	?>
	
	<?php
	$GezilecekYerId=$_POST['idD'];	
	$ara=mysqli_query($bag,"SELECT * FROM `gezilecekyerler` WHERE `id` = $GezilecekYerId");
	$aranan=mysqli_fetch_array($ara);
	
	?>
	
<form style="padding-top:100px;" class="form-horizontal container" action="gezilecekyerupdate.php" method="post">
  <div class="form-group">
    <label for="gezi" class="col-sm-2 control-label">Gezi Yeri</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="geziyeri" id="geziyeri" value="<?php echo $aranan['GeziYeri']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="aciklama" class="col-sm-2 control-label">Aciklama</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="aciklama" id="aciklama" rows="3"><?php echo $aranan['GeziAciklama']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="tarih" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control date" id="id" name="id" value="<?php echo $aranan['id']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Gezilecek Yer Düzenle</button>
    </div>
  </div>
</form>
</body>

</html>	