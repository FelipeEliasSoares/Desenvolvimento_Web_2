<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
            <h2>Destino GET</h2>
    <hr>
    <?php
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_STRING);
    

    echo "<p>Nome informado : $nome<br>Email: $email</p>";
    ?>
    <p>
        <a href="formulario.php?nome=Eder&email=epansani@gmail.com">
            Enviar dados [nome = Eder | email = epansani@gmail.com]
        </a>
    </p>

    <p>
        <a href="formulario.php?nome=Jose da Silva& email=jose1987@outlook.com">
            Enviar dados [nome = Jose da Silva | email = jose1987@outlook.com ]
        </a>   
    </p>

    <p>
        <a href="formulario.php?nome=  & email= ">
            Limpar Tudo
        </a>    
    </p>
    
    <a href="formulario.php?nome=<?php echo $nome ?> & email=<?php echo $email ?> & cor=red">
        <img src="" alt="" id="red">
    </a>

    <a href="formulario.php?nome=<?php echo $nome ?> & email=<?php echo $email ?> & cor=blue">
        <img src="" alt="" id="blue">

    </a>

    <a href="formulario.php?nome=<?php echo $nome ?> & email=<?php echo $email ?> & cor=green">
        <img src="" alt="" id="green">

    </a>
    </div>

        
    <style>
        body{
            background-color: <?php echo $cor; ?>;
        }

        #red{
            width: 100px;
            height: 100px;
            margin: 10px;
            background-color: red;
        }

        #blue{
            width: 100px;
            height: 100px;
            margin: 10px;
            background-color: blue;
        }

        #green{
            width: 100px;
            height: 100px;
            margin: 10px;
            background-color: green;
        }
    </style>
</body>
</html>