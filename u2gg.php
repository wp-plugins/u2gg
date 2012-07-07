<?php
/*
Plugin Name: u2gg
Version: 0.1
Plugin URI: http://shdb.info/
Description: Plug-in to display the date WAREKI(GENGOU)
Author: gosunatxrea@gmail.com
Author URI: http://shdb.info/
*/

function u2gg() {
	global $post;
	
	$utime = strtotime($post->post_date);

	if ($utime >= strtotime("1989-01-08 00:00:00")) 
	{ 
		$gengo = '平成'; 
		$year = date("Y", $utime) - 1988;
	} 
	elseif ($utime >= strtotime("1926-12-25 00:00:00"))
	{ 
		$gengo = '昭和';
		$year = date("Y", $utime) - 1925;
	}
	elseif ($utime >= strtotime("1912-07-30 00:00:00"))
	{ 
		$gengo = '大正'; 
		$year = date("Y", $utime) - 1911;
	}
	elseif ($utime >= strtotime("1868-09-08 00:00:00"))
	{ 
		$gengo = '明治'; 
		$year = date("Y", $utime) - 1867;
	}
	else false;
	
	echo $gengo.$year.'年('.date("Y", $utime).') '.date("n", $utime).'月 '.date("j", $utime).'日';
}

?>
