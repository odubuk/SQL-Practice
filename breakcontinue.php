<?php
for ($i = 1 ; $i < 4 ; $i++)
	{
		for ($j = 1 ; $j < 4 ; $j++)
			{
				if ($i == 1 && $j == 1)
					{
						echo "Continues inner loop when i = $i and j = $j <br>";
						continue;
					}
				if ($i == 2 && $j == 1)
					{
						echo "Breaks inner loop when i = $i and j = $j <br>";
						break;
					}
				echo "Running i = $i and j = $j <br>";
		}
	}
?>
