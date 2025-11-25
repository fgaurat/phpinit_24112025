<?php 
    include(__DIR__.'/autoload.php');
    use App\Rectangle;



    $r = new Rectangle(7,4);
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    surface: <?= $r->surface() ?>
</body>
</html>