<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  if (mkdir($name, 0755)) {
    $src = "./template/";
    $dest = $name . "/";
    foreach (array_diff(scandir($src), array('..', '.')) as $file) {
      copy($src . $file, $dest . $file);
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <!-- <form action="" method="post" style="display: grid; place-content: center; place-items: center;">
    <input type="text" name="name">
    <input type="submit" name="submit" value="NOUVEAU">
  </form> -->
  <?php
  $sites = array_diff(scandir('./'), array('..', '.', 'template', '.git', 'exo_style.css', 'style.css', 'index.php'));
  foreach ($sites as $site) {
    echo '
    <div style="display: grid; place-content: center; place-items: center;">
      <h1>' . $site . '</h1>
      <a href="./' . $site . '">Rejoindre</a>
    </div>
    ';
  }
  ?>
</body>

</html>