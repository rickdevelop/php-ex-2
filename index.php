<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>SECONDO ESERCIZIO PHP</title>
  </head>
  <body>

    <?php

      $output;
      $class;
      if (!empty($_GET['stringa']) && $_GET['stringa'] === "boolean") {

        $output = 'la password inserita è corretta';

        $class ='green';

      } else {

        $output = 'la password inserita è errata';

        $class = 'red';
      }

     ?>

     <h1 class="<?php echo $class;?>"><?php echo $output; ?></h1>

  </body>
</html>
