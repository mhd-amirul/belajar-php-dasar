<?php  
// variabel scope / lingkup variabel
$x = 10;

function tampilx()
{
	# code...
	global $x;
	echo $x;
}

tampilx();
?>