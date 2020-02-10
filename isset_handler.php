<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php

if ( isset( $_POST['definition']))
	{
		$definition = $_POST['definition'];
	}
else
	{
		$definition = NULL;
	}

if ( $definition != NULL)
	{
		if ( $definition != 'Scripting')
			{ echo "$definition is Incorrect..." ;}
			else
			{ echo "$definition is Correct!" ;}
	}
else
{echo 'You must select one answer.' ;}
?>

</body>
</html>