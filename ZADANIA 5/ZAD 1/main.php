<form action="#" method="post" >
    <input type="number" name="a" placeholder="a" />
    <select name="wyb">
        <option value="Dodawanie"> Dodawanie </option>
        <option value="Odejmowanie"> Odejmowanie </option>
        <option value="Mnozenie"> Mnozenie </option>
        <option value="Dzielenie"> Dzielenie </option>
    </select>
	<input type="number" name="b" placeholder="b" id=""/>
    <button type="submit" name="button" formmethod="post">Send</button>
</form>
</form>
<?php
include_once "dodawanie.php";
include_once "dzielenie.php";
include_once "mnozenie.php";
include_once "odejmowanie.php";
if(isset($_POST['button']))
{
    if (!empty($_POST['a']))
    {
        if (!empty($_POST['b']))
        {
            switch ($_POST['wyb'])
            {
                case "Dodawanie":
                    echo Dodawanie($_POST['a'],$_POST['b']);
                    break;
                case "Mnozenie":
                    echo Mnozenie($_POST['a'],$_POST['b']);
                    break;
                case "Odejmowanie":
                    echo Odejmowanie($_POST['a'],$_POST['b']);
                    break;
                case "Dzielenie":
                    echo Dzielenie($_POST['a'],$_POST['b']);
                    break;

            }

        }
    }
}


?>