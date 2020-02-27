<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php

session_start() ;
if ( isset( $_SESSION['id'] ) )
	{
		$id = $_SESSION['id'];
		echo "Welcome user ID #$id" ;
	}
?>

</body>
</html>