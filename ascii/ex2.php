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
  <h2>Exo :<br> Écrire un script PHP qui demande à l'utilisateur de rentrer un caractère, puis qui renvoi le code ascii de celui ci.<br>
    Pour cela on utilisera la commande 'ord'.</h2>

  <div class="container">
    <form class="form" method="post">
      <label for="char">Caractère :</label>
      <input type="text" name="char" id="char" />

      <button type="submit" name="sent">Go !</button>
    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php

    $char = $_POST['char'];

    if (isset($_POST['sent'])) {
      echo $char[0] . ' : ASCII ' . ord($char);
    }

    ?>
  </div>
</body>

</html>