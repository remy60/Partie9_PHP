<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 7 </title>
  </head>
  <body>
<?php
$date = '09-08-2016';
echo $date;
echo '<br/>';
echo date('d-m-Y', strtotime($date.' + 20 DAY'));
 ?>
  </body>
</html>
