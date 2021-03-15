<?php
function random($a)
{
    $tablica[0] = rand();
    $tablica[1] = rand();
    $tablica[2] = rand();
    echo $tablica[$a];
}
	random(2);
?>