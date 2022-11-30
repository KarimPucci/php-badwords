<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
<?php
$nome = 'Karim'; ?>

    <p>Benvenuto <?php echo $nome; ?>!!!!!</p>

  <form action="./pagina-di-atterraggio.php" method="POST">
    <input type="text" name="nome" placeholder="nome" /><br>
    <input type="text" name="cognome" placeholder="cognome" /><br>
    <button type="submit">invia</button>
  </form>
    
</body>
</html>