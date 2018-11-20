<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
    </p>
    <?php
    function returnString($example)
    {
      if (is_string($example)) {
        return $example;
      }
    }
    $stringTest = "Cette phrase doit s'afficher.";
    $numberTest = 50732578;
    ?>
    <p>1er Test</p>
    <p><?php echo returnString($stringTest); ?></p>
    <p>2eme Test</p>
    <p><?php echo returnString($numberTest); ?></p>
  </body>
</html>
