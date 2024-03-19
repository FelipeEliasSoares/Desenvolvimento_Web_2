<?php
    // Include the file to be tested
    require 'contato-destino.php';

    // Test case 1: Test if the file is created and data is written correctly
    $nome = "John Doe";
    $email = "johndoe@example.com";
    $mensagem = "Hello, world!";
    $agora = new DateTime();
    $id = 12345;

    // Generate the expected file path
    $expectedFilePath = "contatos/Contato_" . $agora->format('Y-m-d') . "_" . $id . ".txt";

    // Call the function that writes the data to the file
    writeDataToFile($nome, $email, $mensagem, $agora, $id);

    // Assert that the file is created
    assert(file_exists($expectedFilePath));

    // Assert that the file contains the expected data
    $fileContent = file_get_contents($expectedFilePath);
    assert(strpos($fileContent, "Nome: $nome") !== false);
    assert(strpos($fileContent, "Email: $email") !== false);
    assert(strpos($fileContent, "Mensagem: $mensagem") !== false);
    assert(strpos($fileContent, "Data e hora do envio: " . $agora->format('d/m/Y H:i')) !== false);

    // Test case 2: Test if the HTML output is correct
    ob_start();
    include 'contato-destino.php';
    $output = ob_get_clean();

    // Assert that the HTML output contains the expected data
    assert(strpos($output, "<p>Nome: $nome</p>") !== false);
    assert(strpos($output, "<p>Email: $email</p>") !== false);
    assert(strpos($output, "<p>Mensagem: $mensagem</p>") !== false);
    assert(strpos($output, "<p>Data e hora do envio: " . $agora->format('d/m/Y H:i') . "</p>") !== false);

    // Test case 3: Test if the required files are included
    // Assert that the header.php file is included
    assert(strpos($output, "require 'header.php';") !== false);

    // Assert that the footer.php file is included
    assert(strpos($output, "require 'footer.php';") !== false);

    // Test case 4: Test if the "Voltar" button is present
    assert(strpos($output, "<a href=\"contato.php\" class=\"btn btn-primary m-3 \">Voltar</a>") !== false);

    // All tests passed
    echo "All tests passed!";
?>