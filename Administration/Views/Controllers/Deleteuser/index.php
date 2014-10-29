delete user
<?php
$_GET['params'];
if (count($urlTmp) > 0) {
  $i = 0;
  foreach ($urlTmp as $get) {
    //var_dump($get);
    $_GET['params' . (($i == 0) ? '' : $i)] = $get;
    $i++;
  }
}else {
  $_GET['params'] = null;
}
var_dump($_GET);