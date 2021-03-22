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
function DOWHILE_($tablica)
{
    $a = 0;
    $b = 1;
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
function WHILE_($tablica)
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

function FOR_($tablica)
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
function FOREACH_($tablica)
{
	$a = 0;
    $b = 1;
	$c=2;
	foreach ($tablica as $i)
		{
			if ($tablica[$b] > $tablica[$a])
			{
				$tablica[$a]=$tablica[$b];
			}
			elseif ($tablica[$c] > $tablica[$b])
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
DOWHILE_($tablica);
WHILE_($tablica);
FOR_($tablica);
FOREACH_($tablica);
?>