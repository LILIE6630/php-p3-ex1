<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP ex1</title>
</head>
<body>
  <?php
  $number = 0;
  // boucle while "tant que"
  while ($number < 10) {
    //<?= remplace <?php echo
    ?>
    <p><?= $number ?></p>
    <?php
    $number ++;
  }
  ?>
</body>
</html>
