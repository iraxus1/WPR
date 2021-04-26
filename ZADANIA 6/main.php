
<form action="#" method="post" >
    </br></br>
    Rozpoczecie: <input type="date" name="beg"></br>
    Zakonczenie: <input type="date" name="end"></br>
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
    if (isset($_POST['beg'])&&isset($_POST['end'])&&isset($_POST['how_many'])&&isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['adres'])&&isset($_POST['E-mail']))
    {
        if ($_POST['beg']<$_POST['end'])
        {
			setcookie("people",$_POST['how_many'],time()+3600);
            echo ($_POST['beg']),"</br>",($_POST['end']),"</br>",($_POST['how_many']),"</br>",($_POST['name']),"</br>",($_POST['surname']),"</br>",($_POST['adres']),"</br>",($_POST['E-mail']);

		}	
    }
}
?>