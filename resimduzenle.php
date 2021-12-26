<?php
	include 'head.php';
?>

<body>
	<?php
		include 'header.php';
	?>
	
	<?php
	$ResimId=$_POST['idD'];	
	$ara=mysqli_query($bag,"SELECT * FROM `resimler` WHERE `id` = $ResimId");
	$aranan=mysqli_fetch_array($ara);
	
	?>
	
<form style="padding-top:100px;" class="form-horizontal container" action="resimupdate.php" method="post">
  <div class="form-group">
    <label for="baslik" class="col-sm-2 control-label">Resim</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="resim" id="resim" value="<?php echo $aranan['resim']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="icerik" class="col-sm-2 control-label">Aciklama</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="aciklama" id="aciklama" rows="3"><?php echo $aranan['aciklama']; ?></textarea>
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
      <button type="submit" class="btn btn-default">Resim Düzenle</button>
    </div>
  </div>
</form>

</body>

</html>	