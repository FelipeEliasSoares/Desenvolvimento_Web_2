<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Bichos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h2>Praticando 3 - Animais</h2>
    <hr>

    <?php
    $historico = isset($_GET['historico']) ? explode(',', $_GET['historico']) : [];
    $bicho = filter_input(INPUT_GET, 'bicho', FILTER_SANITIZE_STRING);

    if ($bicho) {
        $historico[] = $bicho;
    }

    $queryString = http_build_query(['historico' => implode(',', $historico)]);
    $limparHistorico = empty($historico) ? '' : '<a href="?">Limpar Histórico</a>';
    ?>

    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="?bicho=pinguim&<?= $queryString ?>" id="pinguim" class="text-decoration-none">
                <img src="pinguim.jpeg" alt="Pinguim" class="img-fluid <?= isset($_GET['bicho']) && $_GET['bicho'] == 'pinguim' ? 'selected' : '' ?>">
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="?bicho=gato&<?= $queryString ?>" id="gato" class="text-decoration-none">
                <img src="gato.jpeg" alt="Gato" class="img-fluid <?= isset($_GET['bicho']) && $_GET['bicho'] == 'gato' ? 'selected' : '' ?>">
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="?bicho=pato&<?= $queryString ?>" id="pato" class="text-decoration-none">
                <img src="pato.jpeg" alt="Pato" class="img-fluid <?= isset($_GET['bicho']) && $_GET['bicho'] == 'pato' ? 'selected' : '' ?>">
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="?bicho=passaro&<?= $queryString ?>" id="passaro" class="text-decoration-none">
                <img src="passaro.jpg" alt="Pássaro" class="img-fluid <?= isset($_GET['bicho']) && $_GET['bicho'] == 'passaro' ? 'selected' : '' ?>">
            </a>
        </div>
    </div>

    <?php
    echo "<p>Animal Selecionado: " . $bicho . "</p>";
    if ($bicho == 'pinguim') {
    echo "<p>Curiosidade sobre os pinguins: Eles passam a maior parte de suas vidas na água, mas são pássaros e têm asas! No entanto, suas asas são mais adaptadas para nadar do que voar.</p>";
    } elseif ($bicho == 'gato') {
        echo "<p>Curiosidade sobre os gatos: Os gatos têm cerca de 32 músculos em cada orelha, permitindo que movam suas orelhas 180 graus.</p>";
    } elseif ($bicho == 'pato') {
        echo "<p>Curiosidade sobre os patos: Eles têm uma visão panorâmica, graças aos olhos posicionados nas laterais da cabeça, o que significa que podem ver até 340 graus sem se moverem.</p>";
    } elseif ($bicho == 'passaro') {
        echo "<p>Curiosidade sobre os pássaros: Algumas espécies de pássaros são capazes de dormir enquanto voam, como os andorinhões. Eles podem dormir por até 10 meses seguidos voando sem parar!</p>";
    }
    echo "<p>Histórico de animais selecionados: " . implode('<br>', $historico) . "</p>";
    echo $limparHistorico;
    ?>

    <style>
        
        .selected {
            border: 2px solid red;
        }
    </style>
</div>




</body>
</html>