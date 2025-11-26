<?php include('index.inc.php'); ?>



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

        <!-- Emmet: table>tbody>tr>td*6 -->
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <?php foreach(array_keys($customers[0]) as $head ): ?>
                    <th><?=$head?></th>
                    <?php endforeach?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $customer['id'] ?></td>
                        <td><?= $customer['first_name'] ?></td>
                        <td><?= $customer['last_name'] ?></td>
                        <td><?= $customer['gender'] ?></td>
                        <td><?= $customer['ip_address'] ?></td>
                        <td><?= $customer['email'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>



        <!-- 
<pre>
    <?php
    print_r($customers);
    ?>
</pre> -->
    </div>
</body>

</html>