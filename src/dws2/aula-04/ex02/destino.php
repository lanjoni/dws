<?php

$nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
$nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
$nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);

$media = ($nota1 + $nota2 + $nota3) / 3;

$resposta = "";

if ($media < 4) {
  $resposta = "<b style='color: red'><u>REPROVADO</u></b>";
} else if ($media >= 6) {
  $resposta = "<b style='color: green'><u>APROVADO</u></b>";
} else {
  $resposta = "de <b style='color: orange'><u>RECUPERAÇÃO</u></b>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Praticando - Calculadora média</h1>
    <hr/>
    <p>Um aluno com as notas <b><?= $nota1 ?></b>, <b><?= $nota2 ?></b> e <b><?= $nota3 ?></b> tem uma média igual a <b><?= $media ?></b></p>
    <br/>
    <p>Com esta média o aluno está <?= $resposta ?></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>