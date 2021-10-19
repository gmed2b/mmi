<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            border: 2px solid black;
            width: 90vw;
            height: 90vh;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }
        span {
            display: inline-block;
        }
    </style>
</head>
<body>
<form name="formNumber" action="" method="GET">
    <input id="num" name="num" type="number">
    <button>OK</button>
</form>

</body>
</html>
<?php

if(isset($_GET["num"])) {
    echo '
    <br>
    <div class="container">
    ';
    for($i=(2*(int)$_GET["num"] - 1); $i >= 0; $i -= 2) {
        echo("<span>".$i."</span>");
    }
    echo '
    </div>
    ';
}

?>