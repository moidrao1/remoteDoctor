{"filter":false,"title":"OnVideoCall.php","tooltip":"/OnVideoCall.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["<!DOCTYPE html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":13,"column":2},"action":"insert","lines":["<?php","","// Require composer autoloader","require __DIR__ . '/vendor/autoload.php';","","if (!isset ($_SESSION ['user'] )) {","","  echo '<script type=\"text/javascript\">","           window.location = \"./index.php#login-content\"","       </script>';"," ","}","","?>"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":2},"end":{"row":13,"column":2},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1512033564131,"hash":"012ea6d109b529ff60c8aae2db4f62d36620111d"}