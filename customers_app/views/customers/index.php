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

        <table class="table table-hover table-striped">
            <thead>

            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $customer->id ?></td>
                        <td><?= $customer->firstName ?></td>
                        <td><?= $customer->lastName ?></td>
                        <td><?= $customer->gender ?></td>
                        <td><?= $customer->ipAddress ?></td>
                        <td><?= $customer->email ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>