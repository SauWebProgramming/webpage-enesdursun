	<?php
		include 'head.php';
	?>

  <body>
		<?php
			include 'header.php';
		?>
<form style="padding-top:100px;" class="form-horizontal container" action="gezilecekyeradd.php" method="post">
  <div class="form-group">
    <label for="yer" class="col-sm-2 control-label">Gezilecek Yer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control date" id="gezilecekyer" name="gezilecekyer" value="" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="aciklama" class="col-sm-2 control-label">Aciklama</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="aciklama" id="aciklama" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Gezilecek Yer Ekle</button>
    </div>
  </div>
</form>
  </body>
  
</html>  