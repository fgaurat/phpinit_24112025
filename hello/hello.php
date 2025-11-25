<?php
$name = 'L\'orage gronde';
$name = "L'orage gronde";
$name = "le \"truc\"";
$hello = 'Hello ' . $name;
// $hello2 = "Hello $name";
$a = 1;
$b = 1.2;
$a = "en fait non\n\n\n\n\n\n\n\n\n\n\n";
// var_dump($a);

$x = 5;
$y = "5";

// var_dump($x == $y);
// var_dump($x === $y);
$n = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>
            <?php echo $hello; ?>
        </h1>

        <pre>
        <?= $hello ?>
        <?= $a ?>
    </pre>
        toto
        <br>

        <?php if ($x === $y) : ?>
            <strong id="">ok</strong>


        <?php else: ?>
            <strong>ko</strong>
        <?php endif ?>

        <strong>
            <?= $x === $y ? "ok" : "ko" ?>
        </strong>

            <br>
        <?= $n? $n:"pas de valeur" ?>
<br>

        <?=  $n ?? "pas de valeur" ?>
    </div>
</body>

</html>