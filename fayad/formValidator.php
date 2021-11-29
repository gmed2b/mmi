<?php

$errors = array();

function validateForm() {
  $valid = true;

  if (empty($_POST['name'])) {
    $errors['name'] = "Name is required.";
    $valid = false;
  }
  else if(!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
    $errors['name'] = "Only letters and white space allowed.";
    $valid = false;
  }

  if (empty($_POST['email'])) {
    $errors['email'] = "Email is required.<br>";
    $valid = false;
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email is not valid.<br>";
    $valid = false;
  }

  if(empty($_POST['gender'])) {
    $errors['gender'] = "Gender is required.<br>";
    $valid = false;
  }
  return $valid;
}

function change() {
  $errors['name'] = "nametesdt";
  $errors['email'] = "email test";
}

// if(isset($_POST['submit'])) {
//   if (validateForm()) {
//     echo "Form is valid.";
//   } else {
//     echo "Form is invalid.";
//   }
//   echo var_dump($errors);
// }

?>
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
        <p style="color:red;">* required field</p>
        <!-- 
          NOM
         -->
        <div class="form-control">
          <label for="name">Nom</label>
          <div class="form-inline">
            <input type="text" name="name" />
            <span></span>
            <p style="color:red;">*</p>
          </div>
          <?php if(isset($errors['name'])) echo $errors['name'] != '' ? '<span style="color:red;">'.$errors['name'].'</span>' : '' ?>
        </div>
        <!-- 
          EMAIL
         -->
        <div class="form-control">
          <label for="email">Email</label>
          <div class="form-inline">
            <input type="text" name="email" />
            <span></span>
            <p style="color:red;">*</p>
          </div>
          <?php if(isset($errors['email'])) echo $errors['email'] != '' ? '<span style="color:red;">'.$errors['email'].'</span>' : '' ?>
        </div>
        <!-- 
          WEBSITE
         -->
        <div class="form-control">
          <label for="website">Website</label>
          <input type="text" name="website"/>
        </div>
        <!-- 
          comment
         -->
        <div class="form-control">
          <label for="comment">comment</label>
          <textarea name="comment" id="comment" cols="30" rows="3"></textarea>
        </div>
        <!-- 
          Genre
         -->
        <div class="form-control">
          <label for="gender">Genre</label>
          <div class="form-inline">
            <label for="female" class="radio-label">Female</label>
            <input type="radio" name="gender" id="female"
            value="female" style="width: auto;">
            <span></span>

            <label for="male" class="radio-label">Male</label>
            <input type="radio" name="gender" id="male"
            value="male" style="width: auto;">
            <span></span>

            <label for="other" class="radio-label">Other</label>
            <input type="radio" name="gender" id="other"
            value="other" style="width: auto;">
          </div>
          <?php if(isset($errors['gender'])) echo $errors['gender'] != '' ? '<span style="color:red;">'.$errors['gender'].'</span>' : '' ?>
        </div>

        <div class="form-inline">
          <input type="submit" name="submit" value="Envoyer" class="btn btn-submit" />
          <span></span>
          <!-- ENVOYER -->
          <input type="reset" value="Reset" class="btn btn-reset" />
        </div>
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