<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h2>Tabuada</h2>
        <hr>

        <form action="tabuada.php">
            <div class="form-group">
                <label for="nome" class="form-label">Numero</label>
                <br>
                <input type="text"  class="form-control" id="numero" placeholder="Digite o numero" name="numero" required>
            </div>
            <br>
            <input type="submit">
        </form>


        <?php
            $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_NUMBER_INT);
            $count =1;

            if($numero != 0){
                echo "<hr>";
                echo "<p> Tabuada do $numero </p>";
                
                while($count<=10){
                    echo $numero." x ".$count." = ".($numero*$count)."<br />";
                    $count++;
                }
            };

        ?>
    </div>  
</body>
</html>