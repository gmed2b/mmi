<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@11.3.1/styles/github-dark.css" />
  <title>Document</title>
</head>

<body>
  <div class="container">

    <form action="" method="POST">
      <fieldset>
        <legend>Contactez moi</legend>
        <div class="form-control">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name" placeholder="Entrez votre nom" required autocomplete="off" />
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Entrez votre email" required autocomplete="off" />
        </div>
        <div class="form-control">
          <label for="message">Message</label>
          <textarea name="message" id="message" cols="30" rows="5" maxlength="300" placeholder="Entrez votre message" required autocomplete="off"></textarea>
        </div>
        <input type="submit" value="Envoyer" class="submit-btn" />
      </fieldset>
    </form>

    <form action="" method="POST">
      <fieldset>
        <legend>Inscription</legend>
        <!-- 
          NOM
         -->
        <div class="form-control">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name" required autocomplete="off" />
        </div>

        <!-- 
          MOT DE PASSE
         -->
        <div class="form-control">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" id="password" required autocomplete="off" />
        </div>

        <!-- 
          EMAIL
         -->
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required autocomplete="off" />
        </div>

        <!-- 
          SEXE
         -->
        <div class="form-control">
          <label for="sexe">Sexe</label>
          <div class="form-inline">
            <input type="radio" name="sexe" id="male" style="width: auto;" required>
            <span>Homme</span>
            <input type="radio" name="sexe" id="female" style="width: auto;" required>
            <span>Femme</span>
          </div>
        </div>

        <!-- 
          MOBILE
         -->
        <div class="form-control">
          <label for="mobile">Mobile</label>
          <input type="text" name="mobile" id="mobile" required autocomplete="off" />
        </div>

        <!-- 
          DATE DE NAISSANCE
         -->
        <div class="form-control">
          <label for="birth">Date de naissance</label>
          <input type="date" name="birth" id="birth" required>
        </div>

        <!-- 
          NOMBRE ANIMAUX
         -->
        <div class="form-control">
          <label for="no_animal">Nombre d'animaux de compagnie</label>
          <div class="form-inline">
            <input type="range" name="no_animal" id="no_animal" min="0" max="10" value="0">
            <span id="no_animal_value">0</span>
            <script>
              document.querySelector("#no_animal").addEventListener('input', () => {
                document.querySelector("#no_animal_value").innerHTML = document.querySelector("#no_animal").value;
              });
            </script>
          </div>
        </div>

        <!-- 
          PREMIER ANIMAL
         -->
        <div class="form-control">
          <label for="first_animal">Premier animal possédé</label>
          <input type="text" name="first_animal" id="first_animal">
        </div>


        <!-- ENVOYER -->
        <input type="submit" value="Envoyer" class="submit-btn" />
      </fieldset>
    </form>
    <pre style="padding: 50px 0;">
        <code style="text-align: start;"><?php
                                          echo htmlspecialchars(preg_replace("/<pre((.|\n)*)script>/i", "", file_get_contents(__file__)));
                                          ?></code>
      </pre>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>
      hljs.highlightAll();
    </script>
  </div>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      color: white;
    }

    body {
      background-color: #1a1e21;
      text-align: center;
      font-family: "JetBrains Mono", sans-serif;
      display: grid;
      place-content: center;
    }

    form {
      padding-top: 50px;
      width: fit-content;
      margin: 0 auto;
    }

    fieldset {
      padding: 15px 25px;
      width: 450px;
    }

    legend {
      padding: 0 10px;
    }

    .form-control {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-bottom: 15px;
    }

    .form-inline {
      display: flex;
      width: -webkit-fill-available;
      align-items: center;
    }

    .form-inline span {
      padding: 0 10px;
    }

    input[type="submit"] {
      width: 100%;
      text-decoration: none;
      color: white;
      padding: 10px;
      background-color: #3498db;
      border: none;
    }

    input[type="submit"]:hover {
      color: #3498db;
      background-color: white;
    }

    .form-control input,
    textarea {
      width: 100%;
      padding: 5px;
      font-family: "JetBrains Mono", sans-serif;
      color: #1a1e21;
    }

    .form-control label {
      padding-bottom: 5px;
    }
  </style>
</body>

</html>