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
