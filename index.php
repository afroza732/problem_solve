<?php
function removeAllZeroString()
{
    $str = '000892021.2408000';
	$str = trim($str, '0');
	echo 'Output: ' .' '. $str;
}
	
function removeStartString()
{
    $str = '000892021.2408000';
	$str = ltrim($str, '0');
	echo 'Output: ' .' '. $str;
}
function removeEndString()
{
    $str = '000892021.2408000';
	$str = rtrim($str, '0');
	echo 'Output: ' .' '. $str;
}

	removeAllZeroString();
	echo '</br>';
	removeStartString();
	echo '</br>';
	removeEndString();
	
?>
