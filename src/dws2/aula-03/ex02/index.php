<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Formulário</h1>
      <hr/>
      <div class="row">
        <form action="destino.php" method="post">
          <div class="mb-3 row">
            <label for="titulo" class="col-sm-2 col-form-label text-end">Título da página: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="corpo" class="col-sm-2 col-form-label text-end">Corpo: </label>
            <div class="col-sm-10">
              <textarea class="form-control" id="corpo" name="corpo" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cor_texto" class="col-sm-2 col-form-label text-end">Cor do texto: </label>
            <div class="col-sm-10">
              <input type="color" class="form-control" id="cor_texto" name="cor_texto" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="url_imagem" class="col-sm-2 col-form-label text-end">URL de uma imagem: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="url_imagem" name="url_imagem" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="url_link" class="col-sm-2 col-form-label text-end">URL de um link: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="url_link" name="url_link" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cor_fundo" class="col-sm-2 col-form-label text-end">Cor de fundo da página: </label>
            <div class="col-sm-10">
              <input type="color" class="form-control" id="cor_fundo" name="cor_fundo" required>
            </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex d-flex justify-content-center">
              <button type="submit" class="btn btn-primary ms-2" id="btnGravar">Gravar</button>
              <button type="reset" class="btn btn-warning ms-2" id="btnLimpar">Limpar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
