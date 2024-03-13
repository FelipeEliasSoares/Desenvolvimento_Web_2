<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
            <h2>Formulário</h2>
            <hr>
            <?php
                if(isset($_POST['interesses'])){
                    $checkboxInteresse = $_POST['interesses'];
                    
                    echo "<h3>Dados da requisição</h3>";
                    echo "<pre style='color: red; border: 2px solid green; padding: 10px;'>";
                    var_dump($checkboxInteresse);
                    echo "</pre>";
                    echo "<h3>Interesses selecionados</h3>";
                    sort($checkboxInteresse); 
                    echo "<ul>";
                    foreach($checkboxInteresse as $key => $interesse){
                        if($key < 3){
                            echo "<li>$interesse</li>";
                        } else {
                            echo "<li>...</li>";
                            break;
                        }
                    }
                    echo "</ul>";
                }
            ?>

            <a href="form_checkbox.php">Voltar para o Formulário</a>
        </div>    
</body>
</html>