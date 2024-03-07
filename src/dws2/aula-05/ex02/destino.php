<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Contador</h1>
        <hr/>
        <h1>Parâmetros informados</h1>
        <p>Início: <?= $_POST["inicio"] ?></p>
        <p>Final: <?= $_POST["final"] ?></p>
        <p>Incremento: <?= $_POST["incremento"] ?></p>

        <?php
        
        $inicio = $_POST["inicio"];
        $final = $_POST["final"];
        $incremento = $_POST["incremento"];

        if ($inicio > $final) {
            for ($i = $inicio; $i >= $final; $i -= $incremento){
                echo $i."<br/>";
            }
        } else {
            for ($i = $inicio; $i <= $final; $i += $incremento){
                echo $i."<br/>";
            }
        }
        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>