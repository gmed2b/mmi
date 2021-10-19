<?php

    if(isset($_POST['submit'])) {
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $fly_time = $_POST['fly_time'];

        if($minute > 0) {
            $fly_time += $minute;
            $minute = 0;
        }
        $add_to_hour = (int)($fly_time / 60);
        $hour += $add_to_hour;
        if($hour > 24) {
            $hour -= 24;
        }
        $fly_time -= $add_to_hour * 60;
        $minute += $fly_time;

        echo 'Heure d arrivée : '.$hour.'H'.$minute;
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
    <form action="" method="post">
        <label for="hour">Heure de depart: </label>
        <input name="hour" type="number">

        <label for="minute">Minute de depart: </label>
        <input name="minute" type="number">
        
        <label for="fly_time">Temps de vol en minute: </label>
        <input name="fly_time" type="number">
        
        <button type="submit" name="submit">Tester</button>
    </form>
</body>
</html>