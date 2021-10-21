<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@11.3.1/styles/github-dark.css" />
  <title>Document</title>
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

    .form-control {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-bottom: 15px;
    }

    .form-control input,
    textarea {
      width: 60%;
      padding: 5px;
      font-family: "JetBrains Mono", sans-serif;
      color: #1a1e21;
    }

    .form-control label {
      padding-bottom: 5px;
    }

    fieldset {
      padding: 15px;
    }

    legend {
      padding: 0 10px;
    }

    code {
      text-align: start;
    }
  </style>
</head>

<body>
  <form action="">
    <fieldset>
      <legend>Contactez moi</legend>

      <div class="form-control">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" placeholder="Entrez votre nom" required autocomplete="off" />
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Entrez votre email" required autocomplete="off" />
      </div>
      <div class="form-control">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Entrez votre message" required autocomplete="off"></textarea>
      </div>
      <input type="submit" value="Envoyer" class="submit-btn" />
    </fieldset>
  </form>
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