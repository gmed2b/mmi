
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ASCII (table initial):</h1>
    <br>
    <form action="" method="post">
        <input type="text" name="car" id="car" placeholder="mot">
        <input type="number" name="key">
        <button type="submit">GO</button>
    </form>
    <?php
    
    function cesarCode($shift, $key, $caracter) {
        $key_index = ord($caracter) - $shift + $key;
        $key_index %= 26;
        $key_index += $shift;
        return chr($key_index);
    }
    
    if(isset($_POST['car'])) {
        // echo "Len : ".strlen($_POST['car'])."<br>";
        // for ($i=0; $i < strlen($_POST['car']); $i++) { 
        //     echo $_POST['car'][$i]." | ".ord($_POST['car'][$i])."<br>";
        // }
        echo '<br> <b>Mot crypte:</b><br>';
        for ($i=0; $i < strlen($_POST['car']); $i++) {
            if(ord($_POST['car'][$i]) >= ord("A") && ord($_POST['car'][$i]) <= ord("Z")){
                echo cesarCode(ord("A"), $_POST['key'], $_POST['car'][$i]);
            }
            else if(ord($_POST['car'][$i]) >= ord("a") && ord($_POST['car'][$i]) <= ord("z")){
                echo cesarCode(ord("a"), $_POST['key'], $_POST['car'][$i]);
            }
        }
    }
    ?>
</body>
</html>