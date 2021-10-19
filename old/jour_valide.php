<?php

if(isset($_POST['submit'])) {
  $valid = false;

  $day = (int)$_POST['day'];
  $month = (int)$_POST['month'];
  $year = (int)$_POST['year'];

  // echo $day;
  // echo $month;
  // echo $year;

  if($month == 2) {
    if($day < 29) {$valid = true;}
    else if($day == 29) {
      if($year % 4 == 0) {
        if($year % 100 == 0) {
          if($year % 400 == 0) {
            $valid = true;
          }
        }
        else {
          $valid = true;
        }
      }
    }
  }
  else if($month < 8) {
    if($month % 2 == 0) {
      if($day < 31) $valid = true;
    }
    else {
      if($day < 32) $valid = true;
    }
  }
  else {
    if($month % 2 == 0) {
      if($day < 32) $valid = true;
    }
    else {
      if($day < 31) $valid = true;
    }
  }

  if($valid) echo 'Date valide !';
  else echo 'Date invalide';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="day">Jour: </label>
        <input name="day" type="text">

        <label for="month">Mois: </label>
        <input name="month" type="text">

        <label for="year">Année: </label>
        <input name="year" type="text">
        
        <button type="submit" name="submit">Tester</button>
    </form>
</body>
</html>