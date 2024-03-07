<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Tabuada</h1>
        <hr/>
        <form action="./index.php" method="get" class="col-3">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" class="form-control mb-3"/>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>

        <?php 
        if (isset($_GET["numero"])):
        ?>
        
        <hr/>
        <h3>Tabuada do <?= $_GET["numero"] ?></h3>
        <?php
        $n = $_GET["numero"];
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = ".($n * $i)."<br/>";
        }

        ?>

        <?php
        endif;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>