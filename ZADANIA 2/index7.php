<?php
function country($a)
{
	$tablica["Polska"] = "Polak";
	$tablica["Niemcy"] = "Niemiec";
	$tablica["Szwecja"] = "Szwed";
	echo $tablica[$a];
}	
	country("Polska");
?>