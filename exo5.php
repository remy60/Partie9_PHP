<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 5 </title>
  </head>
  <body>
    <?php
    $date1=date_create('16-05-2016');
    $date2=date_create('08-08-2016');
    $diff=date_diff($date1 , $date2);
    echo $diff->format("%a");
     ?>
  </body>
</html>
