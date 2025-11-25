<?php
include('tab.inc.php');
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
        Bonjour <?= $name ?>
    

        


    <ul class="list-group">
    <?php foreach ($arr as $value):?>
        <li class="list-group-item"><?= $value ?></li>    
    <?php endforeach?>
    </ul>

    <hr>
    
    <!-- <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr_kv as $key=>$value):?>
                <tr>
                    <td><?=  $key?></td>
                    <td><?=  $value?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table> -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Firstname</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr_kv as $value):?>
                <tr class="<?= $value['job']=="dev"?"table-primary":"" ?>">
                    <td><?=  $value['name']?></td>
                    <td><?=  $value['first_name']?></td>
                    <td><?=  $value['job']?></td>
                    <td><?=  $value['age']?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>

    </div>
</body>

</html>