<?php

if (isset($argv)) {
  $name = $argv[1];
  if (mkdir($name, 0755)) {
    $src = "./template/";
    $dest = $name . "/";
    foreach (array_diff(scandir($src), array('..', '.')) as $file) {
      copy($src . $file, $dest . $file);
    }
  }
}
