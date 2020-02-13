<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php

date_default_timezone_set( 'America/New_York' );
$time = date( 'H:i , F j' );
$user = 'Owen';


echo '
<form action="hidden_handler.php" method="POST">
<fieldset>
<legend>Send us your comments</legend>
<textarea rows="5" cols="20" name="comment">
</textarea>
<input type="hidden" name="user" value=" '. $user .'">
<input type="hidden" name="time" value=" '. $time .'">
</fieldset><p><input type="submit"></p></form>';
?>

</body>
</html>