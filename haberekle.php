	<?php
		include 'head.php';
	?>

  <body>
		<?php
			include 'header.php';
		?>
<form style="padding-top:100px;" class="form-horizontal container" action="haberadd.php" method="post">
  <div class="form-group">
    <label for="tarih" class="col-sm-2 control-label">Tarih</label>
    <div class="col-sm-10">
      <input type="date" class="form-control date" id="tarih" name="tarih" value="" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="baslik" class="col-sm-2 control-label">Başlık</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="baslik" id="baslik" value="" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="icerik" class="col-sm-2 control-label">İçerik</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="icerik" id="icerik" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Haber Ekle</button>
    </div>
  </div>
</form>
  </body>
  
</html>  