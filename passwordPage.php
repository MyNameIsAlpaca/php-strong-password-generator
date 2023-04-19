<?php 
session_start();
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
  <div class="container">
    <span>La tua password appena generata è: "<strong><?php echo $_SESSION['password'] ?></strong>"</span>
    <form action="index.php">
     <button>Ritorna alla creazione</button>
    </form>
  </div>
</body>
</html>