<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Séries</h1>
    </div>
    <a href="#" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        <?php foreach ($series as $serie): ?>
        <li class="list-group-item"><?= $serie; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
