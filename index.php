<?php 

session_start();

$lengthPassword = isset($_GET['lunghezza']) ? $_GET['lunghezza'] : '';

include_once './partials/function.php';

if($lengthPassword != null){

  $passwordGenerated = randomPassword($lengthPassword);
}

if(isset($passwordGenerated)) {

  $_SESSION['password'] = $passwordGenerated;

  header( 'Location: passwordPage.php' ) ;

};

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main">
    <h1>Crea la tua <strong>INFALLIBILE</strong> password</h1>
    <h2>Scegli un numero compreso fra 4 e 18 per veder generata la tua password di quella lunghezza</h2>
    <form action="index.php" >
      <input type="number" min="4" max="18" name="lunghezza" placeholder="Scegli un numero">
      <button type="submit">Invia</button>
    </form>
  </div>
</body>
</html>