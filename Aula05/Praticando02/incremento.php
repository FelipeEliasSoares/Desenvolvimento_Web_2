<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando-Incremento</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h2>Contador</h2>
    <hr>
    <h3>Parametros Informados</h3>
    <div class="form-group">
        <form action="incremento.php" method="post">
            <label for="inicio">Inicio</label>
            <input type="text" name="inicio" id="" class="form-control" placeholder="Digite o inicio" aria-describedby="helpId" required>
            
            <label for="fim">Fim</label>
            <input type="text" name="fim" id="" class="form-control" placeholder="Digite o fim" aria-describedby="helpId" required>

            <label for="incremento">Incremento</label>
            <input type="number" name="incremento" id="" class="form-control" placeholder="Digite o incremento" aria-describedby="helpId" required>
            <br>
            <input type="submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = filter_input(INPUT_POST, 'inicio', FILTER_SANITIZE_NUMBER_INT);
        $fim = filter_input(INPUT_POST, 'fim', FILTER_SANITIZE_NUMBER_INT);
        $incremento = filter_input(INPUT_POST, 'incremento', FILTER_SANITIZE_NUMBER_INT);
        $count = $inicio;

        if ($inicio != 0 && $fim != 0 && $incremento != 0) {
            echo "<hr>";
            echo "<p> Contador de $inicio até $fim com incremento de $incremento </p>";

            if ($inicio <= $fim) {
                while ($count <= $fim) {
                    echo " $count";
                    $count += $incremento;
                }
            } else {
                while ($count >= $fim) {
                    echo " $count";
                    $count -= $incremento;
                }
            }
        } elseif ($inicio != 0 && $fim != 0 && $incremento == 0) {
            echo "<hr>";
            echo "<p> Contador de $inicio até $fim com incremento de 1 </p>";

            if ($inicio <= $fim) {
                while ($count <= $fim) {
                    echo " $count";
                    $count++;
                }
            } else {
                while ($count >= $fim) {
                    echo " $count";
                    $count--;
                }
            }
        } else {
            echo "<hr>";
            echo "<p> Parametros não informados </p>";
        }
    }
?>
</div>


  
</body>
</html>