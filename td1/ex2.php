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
  <h2>Exo :<br> Permutation à l'aide de 3 varibales.</h2>

  <div class="container">
    <h2>Resultat :</h2>
    <?php
    $a = 5;
    $b = 12;
    echo 'a = ' . $a . ' - b = ' . $b . '<br>';

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo 'a = ' . $a . ' - b = ' . $b;

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