<?php
date_default_timezone_set('America/New_York');
*/ I''M BASED OUT OF RALEIGH, NORTH CAROLINA! */
$user = 'Owen';

function display_date()
	{
		return date('H');
	}

function welcome($user)
	{
		$hour = date('H');
		$greeting = ($hour < 12) ?
			'<br>Good Morning ' : '<br>Good Day ';
		$greeting .= $user;
		return $greeting;
	}

echo display_date();
echo welcome($user);
?>