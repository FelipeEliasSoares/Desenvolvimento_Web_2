<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Gerador de Tabela</h2>
        <hr>
        <form action="gerador_tabela.php" method="post">
            <div class="form-group">
                <label for="linhas">Linhas</label>
                <input type="number" name="linhas" id="" class="form-control" placeholder="Digite o numero de linhas" aria-describedby="helpId" required>
                
                <label for="colunas">Colunas</label>
                <input type="number" name="colunas" id="" class="form-control" placeholder="Digite o numero de colunas" aria-describedby="helpId" required>
                <label for="Estilo"></label>
                <select name="Estilo" id="Estilo" class="form-select" required>
                    <option value="table-primary">Azul</option>
                    <option value="table-secondary">Cinza</option>
                    <option value="table-success">Verde</option>
                    <option value="table-danger">Vermelho</option>
                    <option value="table-warning">Amarelo</option>
                    <option value="table-info">Azul Claro</option>
                    <option value="table-light">Branco</option>
                    <option value="table-dark">Preto</option>
                </select>
                <br>
                <input type="submit">
            </div>   
        
        </form>
        <br>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $linhas = filter_input(INPUT_POST, 'linhas', FILTER_SANITIZE_NUMBER_INT);
                $colunas = filter_input(INPUT_POST, 'colunas', FILTER_SANITIZE_NUMBER_INT);
                $Estilo = filter_input(INPUT_POST, 'Estilo', FILTER_SANITIZE_STRING);
                $count = 1;
                $count2 = 1;
                echo "<h3>Tabela $linhas x $colunas</h3>";
                echo "<table class='table $Estilo table-bordered' table-striped>";
                while($count<=$linhas){
                    echo "<tr>";
                    while($count2<=$colunas){
                        echo "<td class='text-center'>  -  </td>";
                        $count2++;
                    }
                    echo "</tr>";
                    $count2 = 1;
                    $count++;
                }
                echo "</table>";
            }
        ?>    
    </div>
</body>
</html>