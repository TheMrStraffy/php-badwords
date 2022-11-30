<?php
$frase = $_GET['sentence'];
$censura = $_GET['banned'];
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
  <h1>Scrivi una frase e seleziona la parola da censurare</h1>
  <form action="./landing-page.php" method="POST">
<input type="text" name="sentence" placeholder="Inserisci la frase">
<input type="text" name="banned" placeholder="Inserisci la parola da censurare">
<button type="submit">Invia</button>
  </form>
</body>
</html>