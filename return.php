<?php
date_default_timezone_set('America/New_York');
# I'm based out of Raleigh, North Carolina!
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