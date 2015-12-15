<?php

$dir = __DIR__ . "/../src";
$files = scandir($dir);

foreach ($files as $file) {
  if ($file !== "." && $file !== "..") {
    require_once $dir."/".$file;
  }
}
