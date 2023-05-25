<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $actual = htmlspecialchars ($_POST ['actual']);
  $nueva = htmlspecialchars ($_POST ['nueva']);
 
  echo $actual, '', $nueva, '', $nuevax2, '';
?>
