<form action="#" method="post" >
	
    Ilosc os: <input type="number" name="how_many"></br>
	Imie: <input type="text" name="name"></br>
	Nazwisko: <input type="text" name="surname"></br>
	Adres: <input type="text" name="adres"></br>
	E-mail: <input type="email" name="E-mail"></br>
	
    <button type="submit" name="button" formmethod="post">Wyślij</button>
	
</form>
<?php
if (isset($_POST['button']))
{
    session_start();
	foreach ($_POST as $values => $item)
    {
        if ($values!='button'){
            $_SESSION[$values] = $item;
        }
    }
    header("Location: session.php");
}
?>
</body>
</html>