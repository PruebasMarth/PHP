<?php
  // La variable global $ _POST que permite acceder a los datos enviados con el método POST por su nombre
  // Para acceder a los datos enviados con el método GET, puede usar $ _GET
  $Actual = htmlspecialchars ($ _POST [ 'actual']);
  $Nueva = htmlspecialchars ($ _POST [ 'nueva']);
  $Nuevax2 = htmlspecialchars ($ _POST [ 'nuevax2']);

  echo $actual, '', $nueva;
?>
