<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php
		$bag=mysqli_connect("localhost","root","","nevsehir");
		

		mysqli_query($bag,"SET NAMES 'utf8'");
		//mysqli_query($bag,"SET CHARACTER SET utf8_general_ci");
		session_start();			
    ?>
			
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NEVSEHIR</title>
    
	<!-- Bootstrap -->
	<link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </head>