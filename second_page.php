<?php

$testo = $_POST['testo'];
$censura = $_POST['censura'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>secondPage</title>
</head>
<body>

<h1>
<p><?php echo $testo ?></p>
<p><?php echo $censura ?></p>

</h1>
  
</body>
</html>