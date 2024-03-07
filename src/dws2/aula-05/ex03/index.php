<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Praticando 3 - Números Primos</h1>
        <hr/>
        <p>
            <a href="./index.php?numero=1">Número 1</a>
            <a href="./index.php?numero=2">Número 2</a>
            <a href="./index.php?numero=3">Número 3</a>
            <a href="./index.php?numero=5">Número 5</a>
            <a href="./index.php?numero=20">Número 20</a>
            <a href="./index.php?numero=32">Número 32</a>
            <a href="./index.php?numero=37">Número 37</a>
        </p>

        <?php 
        if (isset($_GET["numero"])):
        ?>

        <?php
        $numero = $_GET["numero"];
        $paridade = $numero % 2 == 0 ? "PAR" : "ÍMPAR";
        $primo = true;
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }

        if ($primo && $numero != 1) {
            $resposta = "<b color='green'>É</b> um número <b color='green'>PRIMO</b>. Além disso ele é um número <b color='green'>$paridade</b>.";
        } else {
            $resposta = "<b color='red'>NÃO</b> é um número <b color='red'>PRIMO</b>. Além disso ele é um número <b color='red'>$paridade</b>.";;
        }
        ?>

        <p>O número <?= $numero ?> <?= $resposta ?></p>

        <?php
        endif;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>