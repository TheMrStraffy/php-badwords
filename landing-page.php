<?php
$frase = $_POST['sentence'];
$censura = $_POST['banned'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // $frase_esploso = explode(' ', $frase);
  // echo $frase_esploso;
  $lunghezza = strlen($frase);
  echo "$frase che  è della lunghezza $lunghezza diventa == ";
  $frasePulita = str_ireplace($censura, '***', $frase);
  echo $frasePulita;
  ?>
</body>
</html>