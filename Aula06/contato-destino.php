<?php
    require 'header.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $agora = new DateTime(); 
    $id= rand(1, 10000);

    $arquivo = fopen("contatos/Contato_" . $agora->format('Y-m-d') . "_" . $id . ".txt", 'a');
    fwrite($arquivo, "Contato via site: \n\n");
    fwrite($arquivo, "Data e hora do envio: " . $agora->format('d/m/Y H:i') . "\n\n");
    fwrite($arquivo, "----------------------------------------\n");
    fwrite($arquivo, "Nome: $nome\n");
    fwrite($arquivo, "Email: $email\n");
    fwrite($arquivo, "Mensagem: $mensagem\n\n");
    fwrite($arquivo, "----------------------------------------\n");
?>
    <div class="text-center">
        <h2>Formulário para contato</h2>
    </div>


    <div class="container">
        <?php
            echo    "<p>Nome: $nome</p>";
            echo    "<p>Email: $email</p>";
            echo    "<p>Mensagem: $mensagem</p>";
            echo    "<p>Data e hora do envio: " . $agora->format('d/m/Y H:i') . "</p>";
        ?>

        
    </div>
    <a href="contato.php" class="btn btn-primary m-3 ">Voltar</a>

<?php
    require 'footer.php';
?>
