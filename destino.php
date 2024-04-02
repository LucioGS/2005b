<html>
<head>
</head>
<body>
<?php
	$texto1 = $_POST["c1"];
	$texto2 = $_POST["c2"];
	$texto3 = $_POST["c3"];
	$cadena = $texto1 . "-" . $texto2 . "-" . $texto3;
	echo $cadena;
?>
</body>
</html>

