<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bloco {
            border: 1px solid #000;
            padding: 10px;
            color: lightpink;
            background-color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Destino</h1>
        <hr/>
        <h3>Dados da requisição:</h3>
        <div class="bloco">
            <pre><?= var_dump($_POST["interesses"]) ?></pre>
        </div>
        <h3>Interesses selecionados (em ordem alfabética)</h3>
        <div class="interesses_selecionados">
            <ul>
                <?php
                    $interesses = $_POST["interesses"];
                    sort($interesses);
                    $i = 0;
                    foreach ($interesses as $interesse) {
                        if ($i < 3) {
                            echo "<li>$interesse</li>";
                        } else if ($i == 3) {
                            echo "<li>...</li>";
                        }
                        $i++;
                    }
                ?>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>