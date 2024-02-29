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
    <form action="destino.php" method="post">
      <div class="mb-3">
        <label for="nota1" class="form-label">Nota 1</label>
        <input type="number" class="form-control" id="nota1" name="nota1" required step="0.5">
      </div>
      <div class="mb-3">
        <label for="nota2" class="form-label">Nota 2</label>
        <input type="number" class="form-control" id="nota2" name="nota2" required step="0.5">
      </div>
      <div class="mb-3">
        <label for="nota3" class="form-label">Nota 3</label>
        <input type="number" class="form-control" id="nota3" name="nota3" required step="0.5">
      </div>
      <button type="submit" class="btn btn-success">Calcular média</button>
      <button type="reset" class="btn btn-warning">Limpar</button> 
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>