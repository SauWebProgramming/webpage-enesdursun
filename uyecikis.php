<?php
	include 'head.php';
?>

<body>
	<?php
		session_destroy();
		header("refresh:1; url=index.php");
	?>

</body>

</html>

