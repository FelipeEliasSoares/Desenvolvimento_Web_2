<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</head>
<body>
<div class="container">
    <?php
        $titulo = filter_input(INPUT_POST, 'Titulo', FILTER_SANITIZE_STRING);
        $corpo = filter_input(INPUT_POST, 'Corpo', FILTER_SANITIZE_STRING);
        $urlImagem = filter_input(INPUT_POST, 'UrlImagem', FILTER_SANITIZE_URL);
        $urlLink = filter_input(INPUT_POST, 'UrlLink', FILTER_SANITIZE_URL);
        $corTexto = filter_input(INPUT_POST, 'corTexto', FILTER_SANITIZE_STRING);
        $cordeFundo = filter_input(INPUT_POST, 'CordeFundo', FILTER_SANITIZE_STRING);
    ?>
    <h1 class="h1"><?php echo $titulo; ?></h1>
    <hr>
    <p class="h5"><?php echo $corpo; ?></p>
    <br>
    <img src="<?php echo $urlImagem; ?>" alt="Imagem" class="img-fluid">
    <br>
    <a href="<?php echo $urlLink; ?>" class="btn btn-primary">Link</a>
    <br>
    <style>body{color: <?php echo $corTexto; ?>; background-color: <?php echo $cordeFundo; ?>;}</style>
    <br>
    <a href="formulario.php" class="btn btn-primary">Voltar</a>
</div>


</body>
</html>