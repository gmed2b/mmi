        
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Document</title>
</head>

<body>
  <div class="container">

    <form action="" method="POST">
      <fieldset>
        <legend>Infos</legend>
        <!-- 
          NOM
         -->
        <div class="form-control">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name" value="" required autocomplete="off" />
        </div>

        <!-- 
          NIVEAU
         -->
        <div class="form-control">
          <label for="level">Niveau</label>
          <div class="form-inline">
            <label for="beginner" class="radio-label">Débutant</label>
            <input type="radio" name="level" id="beginner"
              value="beginner" style="width: auto;" required  >

            <label for="advanced" class="radio-label">Initié</label>
            <input type="radio" name="level" id="advanced"
              value="advanced" style="width: auto;" required  >
          </div>
        </div>

        <input type="reset" value="Reset" class="btn btn-reset" />

        <!-- ENVOYER -->
        <input type="submit" value="Envoyer" class="btn btn-submit" />
      </fieldset>
    </form>

    
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

    .radio-label {
      padding: 0 10px !important;
    }
    
    .btn {
      text-decoration: none;
      color: white;
      padding: 10px;
      border: none;
      background-color: #3498db;
    }

    .btn:hover {
      color: #3498db;
      background-color: white;
    }

    .btn-submit {
      width: 100%;
    }

    .btn-reset {
      background-color: #db3434;
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