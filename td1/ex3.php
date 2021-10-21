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
  <h2>Exo :<br> Couleur RVB</h2>
  <div class="container">
    <form action="" method="post">
      <label for="nR" style="color: red;">Entrer R :</label>
      <input type="text" name="nR">
      <br>

      <label for="nV" style="color: green;">Entrer V :</label>
      <input type="text" name="nV">
      <br>

      <label for="nB" style="color: blue;">Entrer B :</label>
      <input type="text" name="nB">
      <br>

      <label for="nC">Entrer C :</label>
      <input type="text" name="nC">
      <br>

      <label for="nP">Entrer P :</label>
      <input type="text" name="nP">
      <br>

    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php



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