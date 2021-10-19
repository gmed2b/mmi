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
  <h2>Exo :<br> Écrire un script PHP qui demande à l'utilisateur de rentrer un mot, une clef de cryptage (chiffre), puis qui code le mot en utilisant le codage de César.</h2>

  <div class="container">
    <form class="form" method="post">
      <label for="word">Mot / Phrase :</label>
      <input type="text" name="word" id="word" />

      <label for="key">Clé :</label>
      <input type="text" name="key" id="key" />

      <label for="key">Direction : (0: avant, 1: arrière)</label>
      <input type="text" name="dir" id="dir" value="0" />

      <button type="submit" name="sent">Go !</button>
    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php

    function codage_cesar($word, $key, $dir)
    {
      $new_word = "";
      $word_lenght = strlen($word);
      $shift_maj = ord("A");
      $shift = ord("a");

      for ($i = 0; $i < $word_lenght; $i++) {
        $letter = $word[$i];
        if ((ord($letter) >= ord("A")) && (ord($letter) <= ord("Z"))) {
          $new_letter = ord($letter) - $shift_maj;
          if ($dir == 0) {
            $new_letter += $key;
          } else {
            $new_letter -= $key;
          }
          $new_letter %= 26;
          if ($new_letter < 0) {
            $new_letter += 26;
          }
          $new_letter += $shift_maj;
          $new_word .= chr($new_letter);
        } else if (ord($letter) >= ord("a") && ord($letter) <= ord("z")) {
          $new_letter = ord($letter) - $shift;
          if ($dir == 0) {
            $new_letter += $key;
          } else {
            $new_letter -= $key;
          }
          $new_letter = $new_letter % 26;
          if ($new_letter < 0) {
            $new_letter += 26;
          }
          $new_letter += $shift;
          $new_word .= chr($new_letter);
        }
      }
      return $new_word;
    }

    $word = $_POST['word'];
    $key = $_POST['key'];
    $dir = $_POST['dir'];

    if (isset($_POST['sent'])) {
      echo 'Mot / Phrase normal : ' . $word . '<br><br>';
      echo 'Mot / Phrase codé(e) : ' . codage_cesar($word, (int)$key, (int)$dir) . '<br><br>';
    }


    ?>
  </div>
</body>

</html>