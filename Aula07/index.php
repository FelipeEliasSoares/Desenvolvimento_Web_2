<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 07</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <scrpit src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></scrpit>

</head>
<body>
    <div class="container">
        <br>
        <h1 class="h2">Consultar CEP</h1>
        <hr>
        <form class="row g-3" action="index.php" method="POST">
        <div class="col-3">
            <div class="mb-2">
                <label for="cep">CEP:</label>
                <input class="form-control" type="number" name="cep" id="cep" required autofocus placeholder="Somente números">
            </div>
        </div>
        <div class="col-4">
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>
    </div>
    <br>
    <br>
</body>
</html>

<?php
use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);

if (!empty($cep)) {


        try {
                $response = CepPromise::fetch($cep)->toArray();

                if ($response['zipCode'] === null) {
                    echo "CEP inexistente";
                } else {
                    echo "<div class='container' style='border-radius: 20px; border:3px solid green; background-color:#adedbd'>";
                    $cep_formatado = substr($cep, 0, 2) . '.' . substr($cep, 2, 3) . '-' . substr($cep, 5);

                    echo "<div class='container'>";
                    echo "<h2>CEP: $cep_formatado</h2>";
                    echo "<p>Rua: {$response['street']}</p>";
                    echo "<p>Bairro: {$response['district']}</p>";
                    echo "<p>Cidade: {$response['city']}</p>";
                    echo "<p>Estado: {$response['state']}</p>";


                    echo "</div>";
                }
            } catch (CepPromiseException $e) {
                $response = $e->toArray();
                echo "<div class='container' style='border-radius: 20px; border:3px solid red; background-color:#f08981'>";
                echo "<h2>CEP: $cep</h2>";
                echo "<p>Detalhes do erro:</p>";
                echo "<ul>";
                $errors= $response['errors'];
                foreach ($errors as $key => $value) {
                    echo "<li>";
                        echo $value['message'];    
                    echo "</li>";    
                    
                }
                echo "</ul>";
                echo "</div>";
            }


            echo "</div>";
}




/* 
Claudsonm\CepPromise\Address Object
(
    [city] => Aracaju
    [district] => Inácio Barbosa
    [state] => SE
    [street] => Rua Universo
    [zipCode] => 49040610
)
*/

/*
Array
(
    [message] => Todos os serviços de CEP retornaram erro.
    [code] => 2
    [errors] => Array
        (
            [0] => Array
                (
                    [provider] => via_cep
                    [message] => CEP não encontrado na base do ViaCEP.
                )

            [1] => Array
                (
                    [provider] => cep_aberto
                    [message] => Erro ao se conectar com o serviço CEP Aberto.
                )

            [2] => Array
                (
                    [provider] => correios
                    [message] => CEP INVÁLIDO
                )

        )

)
*/

?>