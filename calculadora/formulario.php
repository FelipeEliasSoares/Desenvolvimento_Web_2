<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <h1>Praticando - Calculando média</h1>
        <hr>
        <form action="resultado.php">
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1</label>
                <input type="number" class="form-control" id="nota1" name="nota1">
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2</label>
                <input type="number" class="form-control" id="nota2" name="nota2">
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3</label>
                <input type="number" class="form-control" id="nota3" name="nota3">
            </div>
            <button type="submit" class="btn btn-success">Calcular Media</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </form>
    </div>
</body>
</html>