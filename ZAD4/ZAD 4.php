<?php
function is_prime($number)
{
	$spr = true;
	for($i = 2; $i < $number-1; $i++)
		{
		if($number % $i==0) 
		{
			$spr = false;
			break;
		}
	}

	if ($spr)
    {
        echo "Liczba jest pierwsza";
    }
    else
    {
        echo "Liczba nie jest pierwsza";
    }
}
if(isset($_POST['button']))
{
    if (!empty($_POST['a']))
    {
        $a=(int)$_POST['a'];
        if ($a==$_POST['a'])
        {
            if ($_POST['a']>0)
            {
                is_prime($_POST['a']);
            }
            else
            {
                echo "Nie jest liczba calkowita dodatnia";
            }
        }
    }
}

?>
<form action="#" method="post">
    liczba do sprawdzenia: <input type="number" name="a"><br> </br>


    <button type="submit" name="button" formmethod="post">Wyślij</button>
</form>