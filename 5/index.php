<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-4 d-flex justify-content-evenly">
    <div class="p-2 bd-highlight">
        <h1>Список стран:</h1>
        <?php
        require_once("countries.php")
        ?>
    </div>
    <form class="form control mt-4" action="addCountry.php" method="post">
        <label for="inputCountry" class="form-label">Input Country</label>
        <input type="text" class="form-control" name="country">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
</body>
</html>
