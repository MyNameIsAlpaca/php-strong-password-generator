<?php 

$lengthPassword = isset($_GET['lunghezza']) ? $_GET['lunghezza'] : '';

function randomPassword($lengthPass) {

  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*(){}[],./?';

  return substr(str_shuffle($permitted_chars), 0, $lengthPass);

};


?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password generator</title>
</head>
<body>
  <form action="index.php" >
    <input type="number" min="4" max="18" name="lunghezza" placeholder="Scegli un numero tra 4 e 18">
    <button type="submit">Invia</button>
  </form>

  <?php if($lengthPassword != null){
    echo randomPassword($lengthPassword);
  }
   ?>
</body>
</html>