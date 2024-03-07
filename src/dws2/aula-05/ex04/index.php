<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Praticando 4 - Gerador de Tabela</h1>
        <hr/>
        <form action="./destino.php" method="post" class="col-4">
            <label for="linhas">Linhas</label>
            <input type="number" name="linhas" id="linhas" class="form-control mb-3" required/>
            <label for="colunas">Colunas</label>
            <input type="number" name="colunas" id="colunas" class="form-control mb-3" required/>
            <label for="estilo">Estilo</label>
            <select name="estilo" id="estilo" class="form-control mb-3">
                <option value="table-primary">table-primary</option>
                <option value="table-success">table-success</option>
                <option value="table-danger">table-danger</option>
                <option value="table-warning">table-warning</option>
                <option value="table-dark">table-dark</option>
            </select>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>