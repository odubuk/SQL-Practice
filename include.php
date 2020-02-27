<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php

$page_title = 'PHP Include' ;
echo '<form action="include.php" method="POST">
<p>Name: <input type= "text" name="name"> </p>
<p>Email: <input type= "text" name="email"> </p>
<p><input type="submit"></p></form>' ;
include ( 'includes/footer.html');
?>

</body>
</html>