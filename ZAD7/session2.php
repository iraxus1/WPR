<?php
session_start();
foreach ($_SESSION as $value => $item){
    echo $value.": ".$item."<br>";
}
?>