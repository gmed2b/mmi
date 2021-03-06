<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../exo_style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@11.3.1/styles/github-dark.css">
  <title>TP-Algo</title>
</head>

<body>
  <a href="./">RETOUR</a>
  <h2>Exo :<br> Écrire un script PHP qui demande à l'utilisateur de rentrer un mot, puis qui renvoi la taille de ce dernier et les codes ascii de ses lettres.<br>
    Pour cela on utilisera la commande 'strlen'.</h2>

  <div class="container">
    <form class="form" method="post">
      <label for="word">Mot / Phrase :</label>
      <input type="text" name="word" id="word" />

      <button type="submit" name="sent">Go !</button>
    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php

    $word = $_POST['word'];
    $word_lenght = strlen($word);

    if (isset($_POST['sent'])) {
      echo 'Taille de "' . $word . '" : ' . $word_lenght . '<br><br>';

      for ($i = 0; $i < $word_lenght; $i++) {
        $char = $word[$i];

        echo $char . ' : ASCII ' . ord($char) . '<br>';
      }
    }


    ?>
  </div>
  <pre>
    <code><?php
          echo htmlspecialchars(preg_replace("/<pre((.|\n)*)script>/i", "", file_get_contents(__file__)));
          ?></code>
  </pre>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
  <script>
    hljs.highlightAll();
  </script>
</body>

</html>