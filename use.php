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
        $Snippit = new Snippit('mario-kart-character');
        $Snippit->setCharacter('daisy');
        echo $Snippit->getHTML();

        $Snippit = new Snippit('mario-kart-character');
        $Snippit->setCharacter('bowser');
        echo $Snippit->getHTML();

        $Snippit = new Snippit('mario-kart-character');
        $Snippit->setCharacter('baby-mario');
        echo $Snippit

      ?>

    </div>
  </body>
</html>
