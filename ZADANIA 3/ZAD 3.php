<table>

<?php
$a = 5;
for ($height = 1; $height <= $a; $height++) {
 echo "<tr>\n";

 for ($width = 1; $width <= $a; $width++) {
   echo "<td>";
   echo $width * $height;
   echo "</td>\n";
 }

 echo "</tr>\n";
}
?>

</table>