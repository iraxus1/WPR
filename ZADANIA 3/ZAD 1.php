<?php
#zadanie_pierwsze
function losowe(&$tablica)
{
	$tablica[0] = rand(1, 50);
    $tablica[1] = rand(1, 50);
    $tablica[2] = rand(1, 50);
    echo $tablica[0];
    echo("<br>");
    echo("<br>");
    echo $tablica[1];
    echo("<br>");
    echo("<br>");
    echo $tablica[2];
    echo("<br>");
    echo("<br>");
}
function Which_table_biggest_number1($tablica)
{
    $a = 0;
    $b = 1;
        //while ($b <= 2)(trzeba dodać pod koniec $b++ {
        //for ($b = 1; $b <= 2; $b++){
    do {
        if ($tablica[$b] > $tablica[$a])
		{
        $tablica[$a]=$tablica[$b];
        }
        $b++;
        } while ($b <= 2);
    echo("<br>");
    echo("<br>");
    echo "DO WHILE: ". $tablica[0];
}
function Which_table_biggest_number2($tablica)
{
	$a = 0;
    $b = 1;
	while ($b <= 2) 
	{
        if ($tablica[$b] > $tablica[$a])
		{
        $tablica[$a]=$tablica[$b];
        }
        $b++;
	}
    echo("<br>");
    echo("<br>");
    echo "WHILE: ". $tablica[0];
}

function Which_table_biggest_number3($tablica)
{
	$a = 0;
    $b = 1;
	$c = 2;
        for ($b = 0; $b < 3; $b++)
		{
			if ($tablica[$b] > $tablica[$a])
			{
				$tablica[$a]=$tablica[$b];
			}
        }
    echo("<br>");
    echo("<br>");
    echo "FOR: ". $tablica[0];
}
function Which_table_biggest_number4($tablica)
{
	$a = 0;
    $b = 1;
	$c = 2;
	foreach ($tablica as $i)
		{
			if ($tablica[$b] > $tablica[$a])
			{
				$tablica[$a]=$tablica[$b];
			}
			if ($tablica[$c] > $tablica[$b])
			{
				$tablica[$b]=$tablica[$c];
			}
        }
    echo("<br>");
    echo("<br>");
    echo "FOREACH: ". $tablica[0];
}

$tablica = [];
losowe($tablica);
Which_table_biggest_number1($tablica);
Which_table_biggest_number2($tablica);
Which_table_biggest_number3($tablica);
Which_table_biggest_number4($tablica);
?>