<html>
<head>
</head>
<body>
  <form method="post">
    <br>
    <input type="text" name="data"><br>
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php
              
if(isset($_POST['data']))
{
$data=($_POST['data']."\n");
$file = fopen('data.txt', 'a');
fwrite($file, $data);
fclose($file);
}
?>