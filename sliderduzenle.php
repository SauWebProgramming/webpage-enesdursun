<?php
	include 'head.php';
?>

<body>
	<?php
		include 'header.php';
	?>
	
	<?php
	$ResimId=$_POST['idD'];	
	$araS=mysqli_query($bag,"SELECT * FROM `slider` WHERE `id` = $ResimId");
	$arananS=mysqli_fetch_array($araS);
	
	?>
	
<form style="padding-top:100px;" class="form-horizontal container" action="sliderupdate.php" method="post">
  <div class="form-group">
    <label for="baslik" class="col-sm-2 control-label">Resim</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="resim" id="resim" value="<?php echo $arananS['resim']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="icerik" class="col-sm-2 control-label">Aciklama</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="aciklama" id="aciklama" rows="3"><?php echo $arananS['aciklama']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="tarih" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control date" id="id" name="id" value="<?php echo $arananS['id']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Slider Düzenle</button>
    </div>
  </div>
</form>
</body>

</html>	