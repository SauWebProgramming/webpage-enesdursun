<?php
	include 'head.php';
?>

<body>
	<?php
		include 'header.php';
	?>
	
	<?php
	$HaberId=$_POST['idD'];	
	$ara=mysqli_query($bag,"SELECT * FROM `haberler` WHERE `id` = $HaberId");
	$aranan=mysqli_fetch_array($ara);
	
	?>
	
<form style="padding-top:100px;" class="form-horizontal container" action="haberupdate.php" method="post">
  <div class="form-group">
    <label for="tarih" class="col-sm-2 control-label">Tarih</label>
    <div class="col-sm-10">
      <input type="date" class="form-control date" id="tarih" name="tarih" value="<?php echo $aranan['Tarih']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="baslik" class="col-sm-2 control-label">Başlık</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="baslik" id="baslik" value="<?php echo $aranan['HaberAdi']; ?>" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="icerik" class="col-sm-2 control-label">İçerik</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="icerik" id="icerik" rows="3"><?php echo $aranan['HaberIcerik']; ?></textarea>
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
      <button type="submit" class="btn btn-default">Haber Düzenle</button>
    </div>
  </div>
</form>
</body>

</html>	