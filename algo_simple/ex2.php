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
  <h3>Exo :<br> Écrivez un algorithme qui après avoir demandé un numéro de jour, de mois et d'année à l'utilisateur, renvoie s'il s'agit ou non d'une date valide.Il n'est sans doute pas inutile de rappeler que le mois de février compte 28 jours, sauf si l’année est bissextile, auquel cas il en compte 29. L’année est bissextile si elle est divisible par quatre. Toutefois, les années divisibles par 100 ne sont pas bissextiles, mais les années divisibles par 400 le sont.</h3>
  <div class="container">
    <form class="form" method="post">
      <label for="hour">Jour :</label>
      <input type="text" name="day" id="day" />
      <label for="month">Mois :</label>
      <input type="text" name="month" id="month" />
      <label for="year">Année :</label>
      <input type="text" name="year" id="year" />

      <button type="submit" name="sent">Go !</button>
    </form>
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php

    if (isset($_POST['sent'])) {

      $day = $_POST['day'];
      $month = $_POST['month'];
      $year = $_POST['year'];
      $valid = false;

      if ($day >= 1 && $day <= 31) {
        if ($month >= 1 && $month <= 12) {
          // Nous allons verifier ici, le mois saisie par l'utilisateur.

          // Mois égale à 2
          if ($month == 2) {
            // Jour inferieur à 29
            if ($day < 29) {
              $valid = true;
            }
            // Jour égale à 29
            else if ($day == 29) {
              // Année divisible par 4
              if ($year % 4 == 0) {
                // Année divisible par 100
                if ($year % 100 == 0) {
                  // Année divisible par 400
                  if ($year % 400 == 0) {
                    $valid = true;
                  }
                }
                // Année non divisible par 100
                else {
                  $valid = true;
                }
              }
            }
          }
          // Mois inferieur à 8
          else if ($month < 8) {
            // Mois paire
            if ($month % 2 == 0) {
              if ($day < 31) {
                $valid = true;
              }
            } else {
              $valid = true;
            }
          }
          // Mois superieur à 8
          else {
            // Mois impaire
            if ($month % 2 != 0) {
              if ($day < 31) {
                $valid = true;
              }
            } else {
              $valid = true;
            }
          }
        } else {
          echo 'Mois invalide<br>';
        }
      } else {
        echo 'Jour invalide<br>';
      }

      if ($valid) {
        echo '<b>Date valide !</b><br>';
      } else {
        echo '<b>Date invalide :/</b><br>';
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