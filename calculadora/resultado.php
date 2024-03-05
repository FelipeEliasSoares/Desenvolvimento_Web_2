<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br>
        <h1>Praticando - Calculando média</h1>
        <hr>
        <br>
        <br>
        <?php
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];
            $nota3 = $_GET['nota3'];
            $media = ($nota1 + $nota2 + $nota3) / 3;
            $resultado = '';
            if ($media >= 6) {
                $resultado = '<span style="color: green; text-decoration: underline;">Aprovado</span>'; 
            } elseif ($media >= 4 && $media < 6) {
                $resultado = '<span style="color: orange;text-decoration: underline;">Recuperação</span>';
            } else {
                $resultado = '<span style="color: red; text-decoration: underline;">Reprovado</span>'; 
            }
        ?>
        <h2>Um aluno com as notas <?php echo $nota1 . ', ' . $nota2 . ' e ' . $nota3; ?> tem a média igual a <?php echo $media; ?></h2>
        <br>
        <h2>Com essa média o aluno esta <?php echo $resultado ?></h2>
    </div>
</body>
</html>