<?php
for ( $i = 1 ; $i < 4 ; $i++ )
{
	echo "<dt>Outer loop iteration $i" ;
	for ( $j = 1 ; $j < 4 ; $j++ )
	{
		echo "<dd>Inner loop iteration $j" ;
	}
}
?>