<?php
	include 'head.php';
?>

<body>
	<?php
		include 'header.php';
	?>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav padtl">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Haberler</h4></a>
          <ul class="dropdown-menu">
            <li><a href="haberekle.php">Haber Ekle</a></li>
            <li><a href="haberduzenlesil.php">Haberler Duzenle/Sil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Resimler</h4></a>
          <ul class="dropdown-menu">
            <li><a href="resimekle.php">Resim Ekle</a></li>
            <li><a href="resimduzenlesil.php">Resimler Duzenle/Sil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Slider</h4></a>
          <ul class="dropdown-menu">
            <li><a href="sliderekle.php">Slider Ekle</a></li>
            <li><a href="sliderduzenlesil.php">Slider Duzenle/Sil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Gezilecek Yerler</h4></a>
          <ul class="dropdown-menu">
            <li><a href="gezilecekyerekle.php">Gezilecek Yer Ekle</a></li>
            <li><a href="gezilecekyerduzenlesil.php">Gezilecek Yerler Duzenle/Sil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Yorumlar</h4></a>
          <ul class="dropdown-menu">
            <li><a href="yorumonaysil.php">Yorumlar Onay/Sil</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</body>	

</html>