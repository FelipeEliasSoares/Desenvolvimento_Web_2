<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulario</h1>
        <hr>
        <form action="processar.php" method="post">
            <div class="form-group">
                <label for="Titulo">Titulo da página</label>
                <input type="text" class="form-control" name="Titulo" id="Titulo" required>
            </div>
            <div class="form-group">
                <label for="Corpo">Corpo</label>
                <input type="text" class="form-control" name="Corpo" id="Corpo" required>
            </div>
            <div class="form-group">
                <label for="corTexto">Cor do texto</label>
                <input type="color" class="form-control" name="corTexto" id="corTexto" required>
            </div>
            <div class="form-group">
                <label for="UrlImagem">URL de uma imagem</label>
                <input type="text" class="form-control" name="UrlImagem" id="UrlImagem" required>
            </div>
            <div class="form-group">
                <label for="UrlLink">URL de Link</label>
                <input type="text" class="form-control" name="UrlLink" id="UrlLink" required>
            </div>
            <div class="form-group">
                <label for="CordeFundo">Cor de plano de fundo da página</label>
                <input type="color" class="form-control" name="CordeFundo" id="CordeFundo" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>