<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TP-Algo</title>
  <link rel="stylesheet" href="../exo_style.css" />
</head>

<body>
  <a href="./">RETOUR</a>
  <h2>Exo :<br> Permutation à l'aide de 3 varibales.</h2>
  
  <div class="container">
    <h2>Resultat :</h2>
    <?php
    $a = 5;
    $b = 12;
    echo 'a = '. $a .' - b = '. $b .'<br>';

    $c = $a;
    $a = $b;
    $b = $c;
    echo 'a = '. $a .' - b = '. $b;

    ?>
  </div>
</body>

</html>