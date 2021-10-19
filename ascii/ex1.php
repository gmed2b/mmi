<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../exo_style.css" />
  <title>TP-Algo</title>
</head>

<body>
  <a href="./">RETOUR</a>
  <h2>Exo :<br> Écrire un script PHP qui affiche les caractère ASCII de 0 à 127 (table initiale) et de 128 à 255 (table étendue).
    Pour cela on utilisera la commande 'chr'.<br>
    Faire un petit script pour afficher la table unicode.<br>
    Pour cela on utilisera la syntax suivante : &#xxx (xxx étant un nombre)</h2>

  <div class="container">
    <h2>Resultat :</h2>
    <div class="results">
      <div>
        <p>Table ASCII initiale</p>
        <?php

        for ($i = 0; $i < 128; $i++) {
          echo $i . ' : ' . chr($i) . '<br>';
        }

        ?>
      </div>
      <div>
        <p>Table ASCII étendue</p>
        <?php

        for ($i = 128; $i < 256; $i++) {
          echo $i . ' : ' . chr($i) . '<br>';
        }

        ?>
      </div>
      <div>
        <p>Table unicode</p>
        <?php

        for ($i = 0; $i < 1000; $i++) {
          echo $i . ' : &#' . $i . '<br>';
        }

        ?>
      </div>
    </div>
  </div>
</body>

</html>