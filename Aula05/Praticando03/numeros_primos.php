<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Praticando 03 - Numeros Primos</h2>
        <hr>
        <div class="d-flex justify-content-between">
            <a href="numeros_primos.php?numero=1">Numero 1</a>
            <a href="numeros_primos.php?numero=2">Numero 2</a>
            <a href="numeros_primos.php?numero=3">Numero 3</a>
            <a href="numeros_primos.php?numero=5">Numero 5</a>
            <a href="numeros_primos.php?numero=20">Numero 20</a>
            <a href="numeros_primos.php?numero=32">Numero 32</a>
            <a href="numeros_primos.php?numero=37">Numero 37</a>
        </div>
        <br>
        <?php

        
        $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_NUMBER_INT);


        if ($numero === false || $numero === null) {
        echo "<p style='background-color: red;'>Número inválido!</p>";
        exit;
        }

        
        $divisores = 0;
        for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i === 0) {
            $divisores++;
        }
        }


        $primo = "<span style='background-color: #ff0000; color: #ffffff;'>primo</span>";
        $par = "";

        
        if ($divisores != 2) {
        $primo = "<span style='background-color: red; color: #ffffff;'>não primo</span>";
        $numeroFormatado = "<span style='background-color: red; color: #ffffff;'>$numero</span>";
        }else{
            $primo = "<span style='background-color: green; color: #ffffff;'>primo</span>";
            $numeroFormatado = "<span style='background-color: green; color: #ffffff;'>$numero</span>";
        }

        
        if ($numero % 2 == 0) {
        $par = "<span style='background-color: green; color: #ffffff;'>par</span>";
        } else {
        $par = "<span style='background-color: red; color: #ffffff;'>ímpar</span>";
        }

        // Exibir a mensagem final
        echo "<h2>O número $numeroFormatado é $primo e $par</h2>";

        ?>


    
    </div>
</body>
</html>