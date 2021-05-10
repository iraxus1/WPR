<form method="post" action="#">
<?php
session_start();
for ($i=1;$i<$_SESSION["how_many"]+1;$i++){
	echo "Imie: ";
    echo sprintf("<input name='imie%d' type='text'>", $i);
	echo " Nazwisko: ";
	echo sprintf("<input name='nazwisko%d' type='text'><br>", $i);
}
?>
<button type="submit" name="save" formmethod="post">Zapisz</button>
<button type="submit" name="show" formmethod="post">Pokaż</button>
</form>
<?php
if (isset($_POST['save'])){
    foreach ($_POST as $values => $item)
    {
        echo $values.": ".$item."<br>";
        if ($values!='save'){
            $_SESSION[$values] = $item;
        }
    }
}
if (isset($_POST['show'])){
    header("Location: session2.php");
}
?>