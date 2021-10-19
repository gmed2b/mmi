<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  if (!file_exists($name)) {
    copy("ex1.php", $name);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    height: 100vh;
    padding: 200px;
    display: grid;
    gap: 1rem;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    text-align: center;
    font-family: "JetBrains Mono", sans-serif;
    overflow: auto;
  }

  h1,
  a {
    margin: 5px 0;
  }

  a {
    width: min-content;
    text-decoration: none;
    color: white;
    padding: 10px;
    background-color: #3498db;
    border: none;
  }
</style>

<body>
  <div style="display: grid; place-content: center; place-items: center;">
    <a href="../">RETOUR</a>
  </div>
  <form action="" method="post" style="display: grid; place-content: center; place-items: center;">
    <input type="text" name="name">
    <input type="submit" name="submit" value="NOUVEAU +">
  </form>
  <?php
  $sites = array_diff(scandir('./'), array('..', '.'));
  foreach ($sites as $site) {
    if (!strpos($site, 'fx') && $site != 'index.php') {
      echo '
      <div style="display: grid; place-content: center; place-items: center;">
        <h1>' . $site . '</h1>
        <a href="./' . $site . '">Rejoindre</a>
      </div>
      ';
    }
  }
  ?>
</body>

</html>