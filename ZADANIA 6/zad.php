<?php
if (isset($_POST['send']))
{
	echo $_COOKIE['people'];
}

else
{
	header("Location: main.php");
}
?>