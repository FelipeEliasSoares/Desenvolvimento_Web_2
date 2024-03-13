<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 05 - Checkbox e Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Formulário</h2>
        <hr>
        <form action="destino.php" method="post">
            <div class="form-group">
                    <label for="interesses">Selecione seus interesses:</label><br>

                    <div class="row">
                        <div class="col-md-3">
                            <input type="checkbox" id="interesse1" name="interesses[]" value="Esportes">
                            <label for="interesse1"> Esportes</label><br>

                            <input type="checkbox" id="interesse2" name="interesses[]" value="Música">
                            <label for="interesse2"> Música</label><br>

                            <input type="checkbox" id="interesse3" name="interesses[]" value="Tecnologia">
                            <label for="interesse3"> Tecnologia</label><br>

                            <input type="checkbox" id="interesse4" name="interesses[]" value="Viagens">
                            <label for="interesse4"> Viagens</label><br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="interesse5" name="interesses[]" value="Culinária">
                            <label for="interesse5"> Culinária</label><br>

                            <input type="checkbox" id="interesse6" name="interesses[]" value="Leitura">
                            <label for="interesse6"> Leitura</label><br>

                            <input type="checkbox" id="interesse7" name="interesses[]" value="Filmes">
                            <label for="interesse7"> Filmes</label><br>

                            <input type="checkbox" id="interesse8" name="interesses[]" value="Arte">
                            <label for="interesse8"> Arte</label><br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="interesse9" name="interesses[]" value="História">
                            <label for="interesse9"> História</label><br>

                            <input type="checkbox" id="interesse10" name="interesses[]" value="Programação">
                            <label for="interesse10"> Programação</label><br>

                            <input type="checkbox" id="interesse11" name="interesses[]" value="Esportes Radicais">
                            <label for="interesse11"> Esportes Radicais</label><br>

                            <input type="checkbox" id="interesse12" name="interesses[]" value="Dança">
                            <label for="interesse12"> Dança</label><br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="interesse13" name="interesses[]" value="Política">
                            <label for="interesse13"> Política</label><br>

                            <input type="checkbox" id="interesse14" name="interesses[]" value="Moda">
                            <label for="interesse14"> Moda</label><br>

                            <input type="checkbox" id="interesse15" name="interesses[]" value="Animais">
                            <label for="interesse15"> Animais</label><br>

                            <input type="checkbox" id="interesse16" name="interesses[]" value="Saúde">
                            <label for="interesse16"> Saúde</label><br>
                        </div>
                    </div>


                    
                </div>

                <br>

                <br>
                <button type="submit" class="btn btn-warning">Enviar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
        </form>
        


    </div>
</body>
</html>