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
          name
         -->
        <div class="form-control">
          <label for="identity">nom</label>
          <input type="text" name="identity[]" />
        </div>
        <!-- 
          prenom
         -->
        <div class="form-control">
          <label for="identity">prenom</label>
          <input type="text" name="identity[]" />
        </div>
        <!-- 
          age
         -->
        <div class="form-control">
          <label for="identity">age</label>
          <input type="text" name="identity[]"/>
        </div>
        <!-- 
          lang
         -->
        <div class="form-control">
          <label for="lang">lang</label>
          <select name="lang[]" id="lang" multiple="multiple" style="padding: 5px;">
            <option style="color: black;" value="francais">francais</option>
            <option style="color: black;" value="anglais">anglais</option>
            <option style="color: black;" value="allemand">allemand</option>
            <option style="color: black;" value="espagnol">espgnol</option>
          </select>
        </div>
        <!-- 
          Genre
         -->
        <div class="form-control">
          <label for="gender">Competance</label>
          <div class="form-inline">
            <label for="python" class="radio-label">Python</label>
            <input type="checkbox" name="skills[]" id="python"
              value="python"  style="width: auto;">
            <span></span>

            <label for="php" class="radio-label">Php</label>
            <input type="checkbox" name="skills[]" id="php"
              value="php"  style="width: auto;">
            <span></span>

            <label for="javascript" class="radio-label">Javascript</label>
            <input type="checkbox" name="skills[]" id="javascript"
              value="javascript"  style="width: auto;">
            <span></span>

            <label for="jouer" class="radio-label">Jouer</label>
            <input type="checkbox" name="skills[]" id="jouer"
              value="jouer"  style="width: auto;">
          </div>
        </div>

        <div class="form-inline">
          <input type="submit" name="submit" value="Envoyer" class="btn btn-submit" />
          <span></span>
          <!-- ENVOYER -->
          <input type="reset" value="Reset" class="btn btn-reset" />
        </div>
      </fieldset>
    </form>

    <?php
      if(isset($_POST['submit'])) {
        if(isset($_POST['identity'])) $identity = $_POST['identity'];
        if(isset($_POST['lang'])) $lang = $_POST['lang'];
        if(isset($_POST['skills'])) $skills = $_POST['skills'];
    ?>
<br><br>
    <fieldset>
      <legend>Récapitulatif de votre fiche personnelle</legend>
      <div class="form-inline">
        <label for="identity">Vous êtes </label>
        <span><?php echo $identity[0].' '.$identity[1]; ?></span>
      </div>
      <div class="form-inline">
        <label for="identity">Vous avez</label>
        <span><?php echo $identity[2].' ans'; ?></span>
      </div>
      <div class="form-control">
        <label for="lang">Vous parlez :</label>
        <ul>
          <?php
            foreach($lang as $value) {
              echo '<li>'.$value.'</li>';
            }
          ?>
        </ul>
      </div>
      <div class="form-control">
        <label for="skills">Vous avez des competances :</label>
        <ul>
          <?php
            foreach($skills as $value) {
              echo '<li>'.$value.'</li>';
            }
          ?>
        </ul>
    </fieldset>

    <?php
      }
    ?>

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
    ul {
      padding-left: 30px;
      text-align: left;
    }
  </style>
</body>
</html>