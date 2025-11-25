<?php include('func.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Dans : "<?= $s ?>" il y a <?=  $nb_chars?> caractères.
    <br>
    <?= $to_upper ?>
    <br>
    date: <?= $d ?>
    <br>
    <?= $v1 ?>+<?= $v2 ?>= <?= $r ?>
    <pre>
    <?php print_r($_GET);?>
    </pre>

    $n : <?= $n ?>
</body>
</html>