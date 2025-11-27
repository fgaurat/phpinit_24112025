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
        <form method="POST" action="save">

            <div class="mb-3">
                <label for="lastName" class="form-label">LastName</label>
                <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastNameHelp">
                <div id="lastNameHelp" class="form-text">Last name</div>
            </div>

            <div class="mb-3">
                <label for="firstName" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstNameHelp">
                <div id="firstNameHelp" class="form-text">FirstName</div>
            </div>

            <div class="mb-3">
                <label for="ip" class="form-label">ip</label>
                <input type="text" class="form-control" id="ip" name="ip" aria-describedby="ipHelp">
                <div id="ipHelp" class="form-text">ip</div>
            </div>

            <div class="mb-3">
                <label for="firstName" class="form-label">gender</label>
                <input type="text" class="form-control" id="gender" name="gender" aria-describedby="genderHelp">
                <div id="genderHelp" class="form-text">gender</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>