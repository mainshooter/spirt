<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SPRIT</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div>

      <?php
        require_once 'Snippit.class.php';
        $Mario = new Snippit('mario-kart-character');
        $Mario->setCharacter('daisy');

        echo $Mario->getHTML();

      ?>

    </div>
  </body>
</html>
