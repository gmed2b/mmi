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
  <h2>Exo :<br> Ecrire l'algorithme qui permet d'afficher les N premiers entiers impairs dans l'ordre décroissant.</h2>
  <div class="container">
    <form class="form" method="post">
      <label for="num">Nombre :</label>
      <input type="text" name="num" id="num" />

      <button type="submit" name="sent">Go !</button>
    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php
    $c = 1;
    // Ce bloc de code s'execute seulement si la variable $_POST['sent'] est déclaré et différente de null.
    // C'est la fonction isset() qui permet de faire cette verification.
    if (isset($_POST['sent'])) {
      // Assigne à la variable $n, le contenu de la variable $_POST['num'].
      // C'est à dire le nombre envoyé par le formulaire.
      $n = $_POST['num'];

      // Effectue une boucle qui commence à 2n - 1 et qui va jusqu'à 1.
      // A chaque tour de boucle, on décremente le compteur de 2
      for ($i = 2 * $n - 1; $i >= 1; $i -= 2) {
        echo '<b>' . $c . '</b> : ' . $i . '<br>';
        $c++;
      }
    }

    ?>
  </div>
</body>

</html>