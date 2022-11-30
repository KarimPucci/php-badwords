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
$nome = 'Utente'; ?>

    <p>Benvenuto <?php echo $nome; ?>!!!!!</p>

  <form action="./second_page.php" method="POST">
    <input type="text" name="testo" placeholder="inserisci il testo" /><br>
    <input type="text" name="censura" placeholder="inserisci censura" /><br>
    <button type="submit">invia</button>
  </form>
    
</body>
</html>